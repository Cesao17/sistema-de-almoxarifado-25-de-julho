<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("conexao.php");
$nome=$_POST['a'];
$sql="SELECT nomecli, sobrenome, email, id_cli, telefone
FROM clientes c where nomecli like '$nome%'";
$qr=mysqli_query($conn,$sql) or die (mysqli_error($conn));
echo "<table border=1 width=100%>
<tr>
<b><td><center>Primeiro nome</center></td>
<b><td><center>Ultimo nome</center></td>
<b><td><center>Email</center></td>
<b><td><center>Telefone</center></td><b>
<b><td><center>Exclus�o</center></td> 
<b><td><center>Edi��o</center></td>
<b><td><center>Inclus�o</center></td><b>
</tr>
";

while($ln=mysqli_fetch_assoc($qr)){

echo"<tr>
<td>".$ln["nomecli"]."</td>
<td>".$ln["sobrenome"]."</td>
<td>".$ln["email"]."</td>
<td>".$ln["telefone"]."</td>
<td><center><a href='apagar.php?id_cli=".$ln['id_cli']."'><button  type=\"submit\" name=\"apagar\">Apagar</button></a></center></td>
<td><center><a href='incluir.php?id_cli=".$ln['id_cli']."'><button type=\"submit\" name=\"apagar\">Editar</button></center></a></td>
<td><center><a href='incluir.php'><button type=\"submit\" 	name=\"apagar\">Incluir</button></a></center></td>
</td>";
}
?>
,
</body>
</html>
