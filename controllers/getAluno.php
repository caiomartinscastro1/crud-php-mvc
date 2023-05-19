<?php
    require_once('../models/Crud.php');

    $dados = $crud->getAlunoById($_GET['id']);

?>