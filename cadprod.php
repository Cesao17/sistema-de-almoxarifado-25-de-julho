<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro Produto</title>
  <meta charset="ute-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<center>

<div class="container">
  <h2>Cadastro</h2>
  <table border="1">
 <form class="form-inline" action="cadastro.php" method="post">
  <tr> <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
    </div></tr>
	<tr> <div class="form-group">
      <label for="nome">Valor</label>
      <input type="number" class="form-control" id="nome" placeholder="valor unt" name="valor">
    </div></tr>
	<tr> <div class="form-group">
      <label for="nome">Estoque</label>
      <input type="number" class="form-control" id="nome" placeholder="Quantidade" name="estq">
    </div></tr>
   <tr><div class="form-group">
  <label for="comment">Descrição</label>
  <textarea class="form-control" rows="5" id="comment" name="desc"></textarea>
</div></tr>
	<tr><div class="form-group">
	<label for="comment">Imagem</label>
    <input name="arquivos" size="20" type="file"/><br/> 
    <button type="submit" class="btn btn-default" value="inserir">cadastrar</button></tr>
	</td>
  </form>
</div>
</center>
<?php
if($_POST)
{

if(isset($_POST['nome']))
$n=strtoupper(($_POST['nome']));
else 
$n='';
if(isset($_POST['valor']))
$v=strtoupper(($_POST['valor']));
else 
$v='';

if(isset($_POST['estq']))
$e=strtoupper(($_POST['estq']));
else 
$e='';
if(isset($_POST['desc']))
$d=strtoupper(($_POST['desc']));
else 
$d='';


include_once("conexao.php");
 $uploaddir= 'img/';
	 $uploadfile=$uploaddir . $_FILES['arquivos'] ['name']; 
	  $imagem = $_FILES ['arquivos']['name'];
  if (move_uploaded_file($_FILES['arquivos']['tmp_name'], $uploadfile))
		$sql = "insert into eprod(nome, valor, estoque, descrição) values ('".$n."', '".$v."', '".$e."', '".$d."', '".$imagem."')";
		if (mysqli_query($conn,$sql))
		echo "Registro incluso com sucesso!".'<br>' .$_FILES['arquivos'] ['name'];


else
echo "Erro ao incluir o registro ".mysqli_error($conn);
header("Refresh: 3;url=cadprod.php");
mysqli_close($conn);
}


?>

</body>
</html>
</body>
</html>
