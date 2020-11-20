<?php

class PontoDeColeta
{
    private $nome_pd;
    private $email_pd;
    private $telefone_pd;
    private $cep;
    private $senha_pd;
    private $csenha_pd;
    private $lat_pd;
    private $long_pd;
    private $endereco_pd;

    public function cadastrar($conexao)
    {
        $authentication = $this->validar();
        if ($authentication) {
            $passwordHashed = password_hash($this->senha_pd, PASSWORD_DEFAULT);
            $conexao = $conexao->conectar();

            $query = "SELECT email_pd FROM ponto_doacao WHERE email_pd='$this->email_pd'";
            $stmt = $conexao->query($query);
            $emails = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($emails) {
                header('location: ./register.php?db=email');
                return false;
            }

            $query = "insert into ponto_doacao(nome_pd, email_pd, senha_pd, telefone_pd, long_pd, lat_pd, endereco_pd) values (
                '$this->nome_pd', 
                '$this->email_pd', 
                '$passwordHashed', 
                '$this->telefone_pd', 
                '$this->long_pd', 
                '$this->lat_pd',
                '$this->endereco_pd');";

            return $conexao->exec($query);
        } else return false;
    }

    public function validar()
    {
        if (empty($this->nome_pd) || empty($this->email_pd) || empty($this->telefone_pd) || empty($this->cep) || empty($this->senha_pd) || empty($this->csenha_pd)) {
            header('location: ./register.php?error=field');
            return false;
        }
        $this->nome_pd = trim($this->nome_pd);
        $this->email_pd = trim($this->email_pd);
        $this->telefone_pd = trim($this->telefone_pd);
        $this->cep = trim($this->cep);
        $this->senha_pd = trim($this->senha_pd);
        $this->csenha_pd = trim($this->csenha_pd);

        if ($this->senha_pd !== $this->csenha_pd) {
            header('location: ./register.php?error=password');
            return false;
        }

        if (strlen($this->senha_pd) < 6) {
            header('location: ./register.php?error=password_len');
            return false;
        }

        $new_tele = preg_replace('/[^0-9]/is', '', $this->telefone_pd);

        if (strlen($new_tele) !== 11) {
            header('location: ./register.php?error=phone');
            return false;
        }

        $this->__set('telefone_pd', $new_tele);

        if (!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $this->email_pd)) {
            header('location: ./register.php?error=email');
            return false;
        }

        $new_cep = preg_replace('/[^0-9]/is', '', $this->cep);

        if (strlen($new_cep) !== 8) {
            header('location: ./register.php?error=cep');
            return false;
        }

        $this->__set('cep', $new_cep);

        $validacao_cep = $this->validar_cep();

        if (!$validacao_cep) {
            header('location: ./register.php?error=cep');
            return false;
        }

        return true;
    }

    public function validar_cep()
    {

        $url = "https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyDUlsao08ZAPQj6msRU8SblQd0bMgqza_s&address=" . urlencode($this->cep) . "&sensor=false";
        $result_string = file_get_contents($url);
        $result = json_decode($result_string, true);

        $endereco = $result['results'][0]['formatted_address'];
        $latitude = $result['results'][0]['geometry']['location']['lat'];
        $longitude = $result['results'][0]['geometry']['location']['lng'];

        if (empty($endereco) || empty($latitude) || empty($longitude)) {
            return false;
        } else {
            $this->__set('endereco_pd', $endereco);
            $this->__set('lat_pd', $latitude);
            $this->__set('long_pd', $longitude);
            return true;
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
