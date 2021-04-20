<?php
require 'db.php';

$cidade = filter_input(INPUT_POST, 'cidade');
$regiao = filter_input(INPUT_POST, 'regiao');
if ($cidade && $regiao) {

    $sql = $pdo->prepare("UPDATE usuarios SET cidade=:cidade, regiao=:regiao WHERE id=5");


    $sql->bindValue(':cidade', $cidade);
    $sql->bindValue(':regiao', $regiao);

    $sql->execute();
    var_dump($cidade, $regiao);
    header("Location:/");
} else {

    header("Location:editar.php");
}
