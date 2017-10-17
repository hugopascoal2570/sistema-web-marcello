<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema";
$con= mysqli_connect("$host","$user","$pass", "$db") or die  ("Não foi possivel conectar com o mysql mysql"); 
?>

<html>
<head>
	<meta charset="UTF-8">
<title>Painel</title>
 
</head>

<body>
	<?php
echo"bem-vendo ao painel"; 
?>
 <?php header("Content-Type: text/html; charset=utf8",true);?>
<br> 
<p><a href="contato.php">Entre em contato</a><br></p>
<center><a href="logout.php"> Sair </a> </center><br>
<form name="formulariodepesquisa" method= "POST" action="results.php"> 
Comparar:<input type="text" name="buscar">
<input type="submit" name="comparar">	
</form>

</body>
</html>