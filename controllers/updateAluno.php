<?php
    require_once('../models/Crud.php');

    $crud->updateAluno($_POST['id'] , $_POST['nome'] , $_POST['idade']);

?>