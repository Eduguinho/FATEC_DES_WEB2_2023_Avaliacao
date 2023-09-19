<?php
if(isset($_POST['submit']))
{
    /*print_r('Nome: ' . $_POST['nomealuno']);
    print_r('<br>');
    print_r('RA: ' . $_POST['ra']);
    print_r('<br>');
    print_r('PLACA: ' . $_POST['placacarro']);
    */

    include_once('configcadastro.php');

    $nomealuno = $_POST['nomealuno'];
    $placacarro = $_POST['placacarro'];
    $ra = $_POST['ra'];
    

    $result = mysqli_query($conexao, "INSERT INTO aluno(nomealuno,placacarro,ra) 
    VALUES('$nomealuno','$placacarro','$ra')");

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Meta tags Obrigatórias -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="icon" href="./img/icone.png">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Cadastro de Alunos</title>
</head>
<body>
<form action="cadastro.php" method="POST">
    <fieldset>
            <div class="form-group">
                <label for="nomealuno">Nome completo:</label>
                <input type="text" id="nomealuno" name="nomealuno" required>
            </div>
            <div class="form-group">
                <label for="placacarro">Placa do Carro:</label>
                <input type="placacarro" id="placacarro" name="placacarro" required>
            </div>
            <div class="form-group">
                <label for="ra">Registro Academico (R.A):</label>
                <input type="ra" id="ra" name="ra" required>
            </div>
            <br><br>
            <div class="form-button">
                <button type="submit" name="submit" id="submit"><a href="principal.php">Cadastrar Aluno</a></button>
            </div>
</fieldset>
        </form>
    

        <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>