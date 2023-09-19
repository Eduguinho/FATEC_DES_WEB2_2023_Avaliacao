<?php
session_start();
include_once('configcadastro.php');

if((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true))
{
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    header("Location: login.php");

}

$logado = $_SESSION['username'];

$sql = "SELECT * FROM aluno ORDER BY nomealuno ASC";

$result = $conexao->query($sql);

print_r($result);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nomealuno</th>
      <th scope="col">placacarro</th>
      <th scope="col">ra</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while

    ?>
    
  </tbody>
</table>
</body>
</html>


