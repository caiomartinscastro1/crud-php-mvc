<?php
    require_once('Conn.php');

    class Crud {
        private $conn;

        public function __construct($conn){
            $this->conn = $conn;
        }

        public function createAluno($nome , $idade){
            $this->conn->query("
                INSERT INTO ALUNOS(
                    NOME,
                    IDADE
                )VALUES(
                    '{$nome}',
                    '{$idade}'
                );
            ");

            header('location: ../views/cadastroAluno.php');
        }

        public function createCurso($nome){
            $this->conn->query("
                INSERT INTO CURSOS(
                    NOME
                )VALUES(
                    '{$nome}'
                );
            ");

            header('location: ../views/cadastroCursos.php');
        }

        public function createMatricula($aluno , $curso){
            $this->conn->query("
                INSERT INTO MATRICULAS(
                    ID_ALUNO,
                    ID_CURSO
                )VALUES(
                    '{$aluno}',
                    '{$curso}'
                );
            ");

            header('location: ../views/cadastroMatriculas.php');
        }

        public function readAlunos(){
            $search = $this->conn->query("
                SELECT * FROM ALUNOS;
            ");

            $consulta = $search->fetchAll(PDO::FETCH_ASSOC);

            return $consulta;
        }

        public function readCursos(){
            $search = $this->conn->query("
                SELECT * FROM CURSOS;
            ");

            $consulta = $search->fetchAll(PDO::FETCH_ASSOC);

            return $consulta;
        }

        public function readMatriculas(){
            $search = $this->conn->query("
                SELECT * FROM MATRICULAS;
            ");

            $consulta = $search->fetchAll(PDO::FETCH_ASSOC);

            return $consulta;
        }

        public function deleteMatricula($id){
            $this->conn->query("
                DELETE FROM MATRICULAS WHERE ID = {$id};
            ");

            header('location: ../index.php');
        }

        public function deleteAluno($id){
            $this->conn->query("
                DELETE FROM ALUNOS WHERE ID = {$id};
            ");

            header('location: ../index.php');
        }

        public function deleteCurso($id){
            $this->conn->query("
                DELETE FROM CURSOS WHERE ID = {$id};
            ");

            header('location: ../index.php');
        }

        public function getAlunoById($id){
            $search = $this->conn->query("
                SELECT * FROM ALUNOS WHERE ID = {$id};
            ");

            $consulta = $search->fetchAll(PDO::FETCH_ASSOC);

            return $consulta[0];

        }
        
        public function getCursoById($id){
            $search = $this->conn->query("
                SELECT * FROM CURSOS WHERE ID = {$id};
            ");

            $consulta = $search->fetchAll(PDO::FETCH_ASSOC);

            return $consulta[0];

        }

        public function updateAluno($id , $nome , $idade){
            $this->conn->query("
                UPDATE ALUNOS SET
                NOME = '{$nome}',
                IDADE = '{$idade}'
                WHERE ID = '{$id}';
            ");

            header('location: ../index.php');
        }

        public function updateCurso($id , $nome){
            $this->conn->query("
                UPDATE CURSOS SET
                NOME = '{$nome}'
                WHERE ID = '{$id}';
            ");

            header('location: ../index.php');
        }

    }

    $crud = new Crud($conexao->conn());

?>