<?php
    require_once('../models/Crud.php');

    $crud->createAluno($_POST['nome'] , $_POST['idade']);

?>