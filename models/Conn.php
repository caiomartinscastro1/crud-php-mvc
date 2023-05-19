<?php
    class Conexao {

        private $dns;
        private $user;
        private $pass;

        public function __construct(){
            $this->dns = 'mysql:host=localhost;dbname=atividade';
            $this->user = 'root';
            $this->pass = '';
        }

        public function conn(){
            $conn = new PDO($this->dns , $this->user , $this->pass);

            return $conn;

        }
    }

    $conexao = new Conexao();
    $conexao->conn();

?>