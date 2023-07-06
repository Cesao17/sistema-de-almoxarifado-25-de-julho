<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tabela Produto</title>
</head>
<body>

<?php
include_once("conexao.php");
$nome=$_POST['a'];
$sql="SELECT nomecli, sobrenome, email, id_cli, telefone
FROM tb_ferramentas c where cod_ferramenta like '$nome%'";
$qr=mysqli_query($conn,$sql) or die (mysqli_error($conn));
echo "

<table border=1 width=100%>
<tr>
<b><td><center>Nome do Produto</center></td>
<b><td><center>Valor</center></td>
<b><td><center>Estoque</center></td><b>
<b><tb><center>Descrição</center></tb><b>
<b><td><center>Exclusão</center></td> 
<b><td><center>Edição</center></td>
<b><td><center>Inclusão</center></td><b>
</tr>
";

while($ln=mysqli_fetch_assoc($qr)){

echo"<tr>
<td>".$ln["nome"]."</td>
<td>".$ln["valor"]."</td>
<td>".$ln["desc"]."</td>
<td><center><a href='apagar.php?id_cli=".$ln['id_cli']."'><button  type=\"submit\" name=\"apagar\">Apagar</button></a></center></td>
<td><center><a href='incluir.php?id_cli=".$ln['id_cli']."'><button type=\"submit\" name=\"apagar\">Editar</button></center></a></td>
<td><center><a href='incluir.php'><button type=\"submit\" 	name=\"apagar\">Incluir</button></a></center></td>
</td>";
}
?>

</body>
</html>

