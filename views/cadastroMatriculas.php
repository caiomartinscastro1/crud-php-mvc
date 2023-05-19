<?php
    require_once('../controllers/showCursos.php');
    require_once('../controllers/showAlunos.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body class="bg-primary">
        
        <form class="w-50 p-5 bg-light mx-auto mt-5" action="../controllers/createMatricula.php" method="post">
            <h2 class="text-center">Realizar matricula</h2>

            <div class="input-group my-4">
                <select name="aluno" id="aluno" class="form-control">
                <?php
                    foreach($consult as $data){
                        echo "<option value='{$data['ID']}'>{$data['NOME']}</option>";    
                    }
                ?>
                </select>
            </div>

            <div class="input-group my-4">
                <select name="curso" id="curso" class="form-control">
                <?php
                    foreach($consulta as $data){
                        echo "<option value='{$data['ID']}'>{$data['NOME']}</option>";    
                    }
                ?>
                </select>
            </div>

            

            <div class="d-flex justify-content-around">
                <button class="d-block w-25 btn btn-success">Cadastrar</button>
                <a href="../index.php" class="d-block w-25 btn btn-danger">Voltar</a>
            </div>

        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>