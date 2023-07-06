<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Editar o cadastro do produto</title>
</head>

<body>
<?php

if(isset($_POST['nome']))
$nome=$_POST['nome'];
else 
$nome='';
if(isset($_POST['marca']))
$marca=$_POST['marca'];
else 
$marca='';
if(isset($_POST['id']))
$id=$_POST['id'];
else 
$id='';


include_once("conexao.php");
	echo $nome, $marca, $id;
	if ( $id<>"" and $nome<>"" and $marca<>""){
		$sql = "update tb_ferramentas set nome_ferramenta='".$nome."', marca_ferramenta= '".$marca."' where cod_ferramenta=$id";
		if (mysqli_query($conn,$sql))
echo "Registro editado com sucesso!";
else	
echo "Erro ao editar o registro ".mysqli_error($conn);


}

?>
</body>
</html>
