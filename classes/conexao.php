<?php

class Conexao
{

    private $host = 'localhost';
    private $dbname = 'bd_anjos';
    private $user = 'root';
    private $password = '';


    public function conectar()
    {
        try {
            $connection = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->password"
            );

            return $connection;
        } catch (PDOException $e) {
            return "<p> Erro de nº:" . $e->getCode() . '</p>';
        }
    }
}
