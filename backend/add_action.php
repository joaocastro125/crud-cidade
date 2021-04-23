<?php
require "db.php";

$nome = filter_input(INPUT_POST, 'cidade');
$regiao = filter_input(INPUT_POST, 'regiao');

if ($nome && $regiao) {
    $sql = $pdo->prepare("INSERT INTO usuarios(cidade,regiao)VALUES(:cidade,:regiao)");
    $sql->bindValue(':cidade', $nome);
    $sql->bindValue(':regiao', $regiao);
    $sql->execute();
    var_dump($nome, $regiao);
    header("location:index.php");
   
} else {
    header("location:index.php");
}
