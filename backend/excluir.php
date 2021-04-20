<?php
require 'db.php';


$id=filter_input(INPUT_GET,'id');

if($id){

$sql=$pdo->prepare(" DELETE FROM usuarios WHERE id=:id");


$sql->bindValue(':id',$id);




$sql->execute();
var_dump($id);
header("Location: ../index.php");


}else{
    
}
