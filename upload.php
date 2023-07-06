<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
  include_once('conexao.php');
 
  $uploaddir= 'img/';
  $descricao= $_POST['descricao'];
  $valor= $_POST['valor'];
 
  $uploadfile=$uploaddir . $_FILES['arquivos'] ['name']; 
  $imagem = $_FILES ['arquivos']['name'];
  if (move_uploaded_file($_FILES['arquivos']['tmp_name'], $uploadfile))
  {
  $sql= "insert into produtos (produto,valor_unit,url) values ('$descricao',$valor,'$imagem')";

if(mysqli_query($conn,$sql))
{
echo"Arquivo Enviado". '<br>' .$_FILES['arquivos'] ['name'];
}
}

else {
echo"Houve um problema no upload do arquivo.<br>".mysqli_error($conn);
}
?>
</body>
</html>