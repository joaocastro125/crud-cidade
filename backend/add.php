<head>
  <title>cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="/frontend/jquery.min.js"></script>
  <script src="/frontend/script.js"></script>
</head>

<body>

  <div class="container">
    <h2>Cadastro de Cidades</h2>
    <form action="add_action.php" method="POST">
      <div class="form-group">
        <div class="col-sm-8">
        
          <label for="nome">NOME:</label>
          <input type=" text" class="form-control" placeholder="Informe sua Cidade" name="cidade">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-8">
          <label for="regiao">REGIAO:</label>
          <input type="text" class="form-control" placeholder="Informe sua Regiao" name="regiao">
        </div>
      </div>

      <button type="submit" class="btn btn-primary">cadastrar</button>
    </form>
  </div>

  
</body>