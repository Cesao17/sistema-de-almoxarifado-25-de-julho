<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
  <h2>Cadastro</h2>
  <table border="0">
  <form class="form-inline" action="cadastro.php" method="post">
    <td><tr><div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
    </div></tr>
    <tr><div class="form-group">
      <label for=marca>sobrenome</label>
      <input type="text" class="form-control" id="marca" placeholder="sobrenome" name="sobrenome">
    </div></tr>
    <tr><div class="form-group">
      <label for=marca>E-mail</label>
      <input type="text" class="form-control" id="marca" placeholder="exeplo:Maria@gmail.com" name="email">
    </div></tr>
	<tr><div class="form-group">
	 <label for=marca>Telefone</label>
      <input type="text" class="form-control" id="marca" placeholder="+55(55)99000-0000 " name="tel">
    </div></tr></td>
    <button type="submit" class="btn btn-default" value="inserir">cadastrar</button>
  </form>
</div>
 <a href="index.php"><button type="button" class="btn btn-link">voltar</button>      </a>
<?php
if($_POST)
{

if(isset($_POST['nome']))
$p=strtoupper(($_POST['nome']));
else 
$p='';

if(isset($_POST['sobrenome']))
$u=strtoupper(($_POST['sobrenome']));
else 
$u='';
if(isset($_POST['email']))
$e=strtoupper(($_POST['email']));
else 
$e='';
if(isset($_POST['tel']))
$t=strtoupper(($_POST['tel']));
else 
$t='';


include_once("conexao.php");
	
		$sql = "insert into clientes(nomecli, sobrenome, email, telefone) values ('".$p."', '".$u."', '".$e."','".$t."')";
		if (mysqli_query($conn,$sql))
		echo "Registro incluso com sucesso!";


else
echo "Erro ao incluir o registro ".mysqli_error($conn);
header("Refresh: 2;url=cadastro.php");
mysqli_close($conn);
}


?>
 
</body>
</html>
</body>
</html>
