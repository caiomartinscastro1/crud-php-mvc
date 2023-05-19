<?php
    require_once('Conn.php');

    class Tools {
        private $conn;

        public function __construct($conn){
            $this->conn = $conn;
        }

        public function showCursos(){
            $search = $this->conn->query("
                SELECT * FROM CURSOS;
            ");

            $consult = $search->fetchAll(PDO::FETCH_ASSOC);

            return $consult;

        }   

        public function showAlunos(){
            $search = $this->conn->query("
                SELECT * FROM ALUNOS;
            ");

            $consult = $search->fetchAll(PDO::FETCH_ASSOC);

            return $consult;
        }


    }

    $tools = new Tools($conexao->conn());

?>