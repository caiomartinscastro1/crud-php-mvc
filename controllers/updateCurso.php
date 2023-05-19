<?php
    require_once('../models/Crud.php');

    $crud->updateCurso($_POST['id'] , $_POST['curso']);

?>