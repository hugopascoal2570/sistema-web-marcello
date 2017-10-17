<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema";
$con= mysqli_connect("$host","$user","$pass", "$db") or die (mysql_error()); 

$nome  = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$sobrenome  = (isset($_POST['sobrenome'])) ? $_POST['sobrenome'] : '';
$dia  = (isset($_POST['dia'])) ? $_POST['dia'] : '';
$mes  = (isset($_POST['mes'])) ? $_POST['mes'] : '';
$ano  = (isset($_POST['ano'])) ? $_POST['ano'] : '';
$rg  = (isset($_POST['rg'])) ? $_POST['rg'] : '';
$cpf  = (isset($_POST['cpf'])) ? $_POST['cpf'] : '';
$cpf2  = (isset($_POST['cpf2'])) ? $_POST['cpf2'] : '';
$rua  = (isset($_POST['rua'])) ? $_POST['rua'] : '';
$numero  = (isset($_POST['numero'])) ? $_POST['numero'] : '';
$bairro  = (isset($_POST['bairro'])) ? $_POST['bairro'] : '';
$cod_estados  = (isset($_POST['cod_estados'])) ? $_POST['cod_estados'] : '';
$cod_cidades  = (isset($_POST['cod_cidades'])) ? $_POST['cod_cidades'] : '';
$cep  = (isset($_POST['cep'])) ? $_POST['cep'] : '';
$cep2  = (isset($_POST['cep2'])) ? $_POST['cep2'] : '';
$email  = (isset($_POST['email'])) ? $_POST['email'] : '';
$login = (isset($_POST['login'])) ? $_POST['login'] : '';
$pass  = (isset($_POST['pass'])) ? $_POST['pass'] : '';
$passconfirm  = (isset($_POST['passconfirm'])) ? $_POST['passconfirm'] : '';

$sql = mysqli_query($con,"INSERT INTO sistemapessoal(nome,sobrenome,dia,mes,ano,rg,cpf,cpf2,rua,numero,bairro,cod_estados,cod_cidades,cep,cep2,email,login,pass,passconfirm) 
VALUES('$nome', '$sobrenome','$dia','$mes','$ano','$rg','$cpf','$cpf2','$rua','$numero','$bairro','$cod_estados','$cod_cidades','$cep','$cep2','$email','$login','$pass','$passconfirm')");
echo "<center><h1>Cadastro Efetuado com Sucesso</h1></center>";
?>
<html>
<head>
	<meta charset="UTF-8">
<title></title>
</head>
<body>
<a href="login.php">Clique aqui para efetuar seu login</a>
</body>
</html>