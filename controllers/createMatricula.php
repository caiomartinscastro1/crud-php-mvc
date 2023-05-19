<?php
    require_once('../models/Crud.php');

    $crud->createMatricula($_POST['aluno'] , $_POST['curso']);

?>