<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2><center>Buscar</center></h2>
  <p></p>
  <form action="tabela.php" enctype="multipart/form-data" method="post">
<div class="col-xs-3">
        <label for="ex2">Nome</label>
        <input class="form-control" id="ex2" name="a" type="text">
      </div>
	  <div class="col-xs-3">
        <label for="ex2">Nobrenome</label>
        <input class="form-control" id="ex2" name="b" type="text">
      </div>
	  <div class="col-xs-3">
        <label for="ex2">E-mail</label>
        <input class="form-control" id="ex2" name="c" type="text">
      </div>
	  <br />
	  <input type="submit" value="Enviar"/>
   
  </form>
</div>




</body>
</html>
