<?php
include_once("conexao.php");  ?>
<html>
<head>
	<meta charset="UTF-8">
<title>Autentificando Usuario</title>

<script type="text/javascript">
function loginsuccessfully(){
 setTimeout("window.location='painel.php'", 3000);
}
function loginfailed(){
 setTimeout("window.location='login.php'", 3000);
}
</script>
</head>
<body>

<?php
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql = mysqli_query($con, "SELECT * FROM sistemapessoal WHERE email = '$email' and pass = '$pass' ") or die(mysqli_error());
$row = mysqli_num_rows($sql);
if($row > 0){
 session_start();
 $_SESSION['email']=$_POST['email'];
 $_SESSION['pass']=$_POST['pass'];
 echo "<center>Você foi autentificado com sucesso! Aguarde 3 segundos enquanto você e redirecionado.</center>"; 
 echo "<script>loginsuccessfully()</script>";
} else {
 echo "<center>Nome de usuario ou senha invalido!Aguarde 3 segundos, enquanto você é redirecionado.</center>";
 echo "<script>loginfailed()</script>";
}
?>
</body>
</html>﻿