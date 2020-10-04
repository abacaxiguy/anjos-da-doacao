<?php


class Usuario
{
    private $pnome;
    private $unome;
    private $telefone;
    private $nascimento;
    private $cpf;
    private $senha;
    private $csenha;
    private $email;

    public function cadastrar($conexao)
    {
        $authentication = $this->validar();
        if ($authentication) {
            $conexao = $conexao->conectar();
            $query = "insert into usuario(nome_usuario, email_usuario, senha_usuario, cpf_usuario, nascimento_usuario, telefone_usuario, moeda_usuario) values (
                '$this->pnome $this->unome', 
                '$this->email', 
                '$this->senha', 
                '$this->cpf', 
                '$this->nascimento', 
                '$this->telefone', 
                0);";

            return $conexao->exec($query);
        } else return false;
    }

    public function validar()
    {
        if ($this->pnome && $this->unome && $this->telefone && $this->nascimento && $this->cpf && $this->senha && $this->csenha && $this->email) {
            if ($this->senha !== $this->csenha) {
                header('location: ./register.php?error=password');
                return false;
            }

            // VALIDADOR DE CPF

            $new_cpf = preg_replace('/[^0-9]/is', '', $this->cpf);

            if (strlen($new_cpf) !== 11) {
                header('location: ./register.php?error=cpf');
                return false;
            }

            // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
            if (preg_match('/(\d)\1{10}/', $new_cpf)) {
                header('location: ./register.php?error=cpf');
                return false;
            }

            // Faz o calculo para validar o CPF
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $new_cpf[$c] * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($new_cpf[$c] != $d) {
                    header('location: ./register.php?error=cpf');
                    return false;
                }
            }

            $this->__set('cpf', $new_cpf);
            // FIM DO VALIDADOR

            if (strlen($this->senha) < 6) {
                header('location: ./register.php?error=password_len');
                return false;
            }

            $new_tele = preg_replace('/[^0-9]/is', '', $this->telefone);

            if (strlen($new_tele) !== 11) {
                header('location: ./register.php?error=phone');
                return false;
            }

            $this->__set('telefone', $new_tele);

            if (preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $this->email)) {
                header('location: ./register.php?error=email');
                return false;
            }
            if (false === strtotime($this->nascimento)) {
                header('location: ./register.php?error=date');
                return false;
            }
            list($year, $month, $day) = explode('-', $this->nascimento);
            if (!checkdate($month, $day, $year) || $year >= date('Y') || $year < 1900) {
                header('location: ./register.php?error=date');
                return false;
            }

            return true;
        } else {
            header('location: ./register.php?error=field');
            return false;
        }
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
