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
<form class="form-inline" action="formprod.php" method="post">
  <td><tr><div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
  </div></tr>
  <button type="submit" class="btn btn-default" value="inserir">buscar</button>
</form>

<?php
include_once("conexao.php");
$nome=$_POST['nome']; 
$sql="SELECT nome, descri, valor_unit, estq, img, cod_prod
FROM eprod c where Nome like '$nome%'";
$qr=mysqli_query($conn,$sql) or die (mysqli_error($conn));
echo"<table border=1 width=100%>
<tr>
<b><td><center>Produto</center></td>
<b><td><center>Descrição</center></td
<b><td><center>Valor de unidade</center></td>
<b><td><center>Estoque</center></td>
<b><td><center>Exclusão</center></td>
<b><td><center>Edição</center></td>
<b><td><center>img</center></td>
</tr>
";

while($ln=mysqli_fetch_assoc($qr)){
 echo "<tr>
<td>".$ln["nome"]."</td>
<td>".$ln["descri"]."</td>
<td>".$ln["valor_unit"]."</td>
<td>".$ln["estq"]."</td>
<td><center><a href='apagarprod.php?cod_prod=".$ln['cod_prod']."'><button type='submit'>Apagar</button></a></center></td>";
echo "<td><center><a href='editrprod.php?cod_prod=".$ln['cod_prod']."'><button type='submit' name='editar'>Editar</button></center></a><td>
<td>".$in["img"]."</td>
</td>";
}
?>
</body>
</html>
