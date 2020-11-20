<?php


class EmpresaParceira
{
    private $nome_ep;
    private $email_ep;
    private $telefone_ep;
    private $senha_ep;
    private $csenha_ep;
    private $site_ep;
    private $img_ep;

    public function cadastrar($conexao)
    {
        $authentication = $this->validar();
        if ($authentication) {
            $passwordHashed = password_hash($this->senha_ep, PASSWORD_DEFAULT);
            $conexao = $conexao->conectar();

            $query = "SELECT email_empresa FROM empresa_parceira WHERE email_empresa='$this->email_ep'";
            $stmt = $conexao->query($query);
            $emails = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($emails) {
                header('location: ./register.php?db=email');
                return false;
            }

            $query = "insert into empresa_parceira(nome_empresa, email_empresa, telefone_empresa, site_empresa, senha_empresa, img_empresa) values (
                '$this->nome_ep', 
                '$this->email_ep', 
                '$this->telefone_ep', 
                '$this->site_ep', 
                '$passwordHashed', 
                '$this->img_ep');";

            return $conexao->exec($query);
        } else return false;
    }

    public function validar()
    {
        if (empty($this->nome_ep) || empty($this->email_ep) || empty($this->telefone_ep) || empty($this->site_ep) || empty($this->senha_ep) || empty($this->csenha_ep)) {
            header('location: ./register.php?error=field');
            return false;
        }
        $this->nome_ep = trim($this->nome_ep);
        $this->email_ep = trim($this->email_ep);
        $this->telefone_ep = trim($this->telefone_ep);
        $this->site_ep = trim($this->site_ep);
        $this->senha_ep = trim($this->senha_ep);
        $this->csenha_ep = trim($this->csenha_ep);

        if ($this->senha_ep !== $this->csenha_ep) {
            header('location: ./register.php?error=password');
            return false;
        }

        if (strlen($this->senha_ep) < 6) {
            header('location: ./register.php?error=password_len');
            return false;
        }

        $new_tele = preg_replace('/[^0-9]/is', '', $this->telefone_ep);

        if (strlen($new_tele) !== 11) {
            header('location: ./register.php?error=phone');
            return false;
        }

        $this->__set('telefone_ep', $new_tele);

        if (!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $this->email_ep)) {
            header('location: ./register.php?error=email');
            return false;
        }

        $this->__set('site_ep', filter_var($this->site_ep, FILTER_SANITIZE_URL));

        if (filter_var($this->site_ep, FILTER_VALIDATE_URL) === false) {
            $this->__set('site_ep', "https://" . $this->site_ep);
            if (filter_var($this->site_ep, FILTER_VALIDATE_URL) === false) {
                header('location: ./register.php?error=site');
                return false;
            }
        }

        $this->__set('img_ep', './img/icons\empresa.png');

        return true;
    }

    public function __set($atr, $val)
    {
        $this->$atr = $val;
    }

    public function __get($atr)
    {
        return $atr;
    }
}
