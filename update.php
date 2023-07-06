<!DOCTYPE html>
<html lang="en">
<head>
  <title>Editar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>



<?php
include_once("conexao.php");
	
	if(isset($_GET['cod_ferramenta']))
$id=$_GET['cod_ferramenta'];
else 
$id='';

	
		$sql = "select * from tb_ferramentas where cod_ferramenta=$id";
		$qr=mysqli_query($conn,$sql) or die (mysqli_error($conn));
		$ln=mysqli_fetch_assoc($qr);
		$nome= $ln['nome_ferramenta'];
		$marca= $ln['marca_ferramenta'];
		$id=$ln['cod_ferramenta'];
		echo"<div class='container'>
  <h2>Digite o novo nome e marca</h2>
  
  <form class='form-inline' action='edit.php' method='post'>
    <div class='form-group'>
      <label for='nome'>Nome da Ferramenta:</label>
      <input type='text' class='form-control' id='nome' placeholder='Nome' name='nome' value='$nome'>
    </div>
    <div class='form-group'>
      <label for=marca>Marca:</label>
      <input type='text' class='form-control' id='marca' placeholder='Marca' name='marca' value='$marca'>
    </div>
    
    <button type='submit' class='btn btn-default' value='editar'>editar</button>
	<imput type='hidden' name='id' value='$id' />
  </form>
</div>";
		
		
		mysqli_close($conn);
?>

</body>
</html>
