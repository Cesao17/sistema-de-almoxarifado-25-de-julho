<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

if(isset($_GET['cod_ferramenta']))
$ex=$_GET['cod_ferramenta'];
else 
$ex='';


include_once("conexao.php");
	
	if ( $ex<>""){
		$sql = "delete from tb_ferramentas where cod_ferramenta='$ex'";
		if (mysqli_query($conn,$sql))
echo "Registro excluído com sucesso!";
else
echo "Erro ao excluir o registro ".mysqli_error($conn);
header("Refresh: 2;url=excluir.php");

}


?>
</body>
</html>
