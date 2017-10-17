<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema";
$conexao =@mysql_connect($host,$user, $pass) or die(mysql_error());
mysql_select_db($db) or die(mysql_error());  
?> 

<html>
<head>
  <meta charset="UTF-8">
  <title>Buscar produto</title>
  </head>
<body>
<?php echo "alterando produtos:<br></br>";?>
<form name="formulariodepesquisa" method= "POST" action="alterar-produto.php"> 
Comparar:<input type="text" name="buscar">
<input type="submit" name="comparar">	
  </form>
</body>
</html>