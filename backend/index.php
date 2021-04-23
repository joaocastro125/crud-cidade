<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
   
    <title>crud-cidades</title>
    <style>
       #button1 a{
            color:white;
            
           
        }
        .principal{
            color: blue;
        }
        #button2 a{
            color:white;

        }
        
        

    </style>
        
</head>

<body>
    <div class="container">
        <?php
        require "db.php";

        $lista = [];
        $sql = $pdo->query("SELECT *FROM usuarios");
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <a class="principal" href="add.php">Adcionar</a>

        <h1>Lista de Cidades </h1>

        <table class="table table-striped">


            <tr>
                <td>ID</td>
                <td>CIDADE</td>
                <td>REGIAO</td>
                <td>ACÕES</td>
            </tr>
            <?php foreach ($lista as $usuario) : ?>




                <tr>
                    <td><?php echo $usuario['id']; ?></td>
                    <td><?php echo $usuario['cidade']; ?></td>
                    <td><?php echo $usuario['regiao']; ?></td>
                    <td>
                    <button id="button1" class="btn btn-primary botao1"><a href="editar.php?id=<?php echo $usuario['id']; ?>">[Editar]</a></button>
                    <button id="button2" class="btn btn-danger"><a href="./backend/excluir.php?id=<?php echo $usuario['id']; ?>">[Excluir]</a></button>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
   <script src="../frontend/jquery.min.js"></script>
   <script src="../frontend/script.js"></script>

</body>

</html>