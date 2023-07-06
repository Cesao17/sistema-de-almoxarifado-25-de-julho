<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" / >
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("conexao.php");
$nome=$_POST['nome'];
$marca=$_POST['marca'];
$sql="SELECT nome_ferramenta, marca_ferramenta
FROM tb_ferramentas c where nome_ferramenta like '$nome%' and marca_ferramenta like '$marca%'";
$qr=mysqli_query($conn,$sql) or die (mysqli_error($conn));
echo "<table border=1 width=100%>
<tr>
<b><td><center>Nome Ferramenta</center></td>
<b><td><center>Marca Ferramenta</center></td>
</tr>";

while($ln=mysqli_fetch_assoc($qr)){

echo"<tr>
<td>".$ln["nome_ferramenta"]."</td>
<td>".$ln["marca_ferramenta"]."</td>


</td>";
}
?>

 <a href="index.php"><button type="button" class="btn btn-link">voltar</button>      </a>
</body>
</html>
