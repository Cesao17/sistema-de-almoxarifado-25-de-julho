<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>editar</title>
</head>

<body>
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


<div class="container">
  <h2>Buscar ferramentas para edição</h2>
  
  <form class="form-inline" action="editar.php" method="post">
    <div class="form-group">
      <label for="nome">Nome da Ferramenta:</label>
      <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
    </div>
    <div class="form-group">
      <label for=marca>Marca:</label>
      <input type="text" class="form-control" id="marca" placeholder="Marca" name="marca">
    </div>
    
    <button type="submit" class="btn btn-default" value="inserir">buscar</button>
  </form>
</div>
<?php

include_once("conexao.php");
$nome=(isset($_POST['nome']));
$marca=(isset($_POST['marca']));
$sql="SELECT nome_ferramenta, marca_ferramenta, cod_ferramenta
FROM tb_ferramentas c where nome_ferramenta like '$nome%' and marca_ferramenta like '$marca%'";
$qr=mysqli_query($conn,$sql) or die (mysqli_error($conn));
echo "<table border=1 width=100%>
<tr>
<b><td><center>Nome Ferramenta</center></td>
<b><td><center>Marca Ferramenta</center></td>
<b><td><center>Edição</center></td> 
</tr>";

while($ln=mysqli_fetch_assoc($qr)){

echo"<tr>
<td>".$ln["nome_ferramenta"]."</td>
<td>".$ln["marca_ferramenta"]."</td>
<td><center><a href='update.php?cod_ferramenta=".$ln['cod_ferramenta']."'><button  type=\"submit\" name=\"apagar\">editar</button></a></center></td>


</td>";
}
?>

	



</body>
</html>
</body>
</html>
