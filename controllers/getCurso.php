<?php
    require_once('../models/Crud.php');

    $dados = $crud->getCursoById($_GET['id']);

?>