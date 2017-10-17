<html>
<head>
	<meta charset="UTF-8">
<title></title>
</head>
<body>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema";
$con= mysqli_connect("$host","$user","$pass", "$db") or die  ("Não foi possivel conectar com o mysql mysql"); 
?>

<?php
$php_nome = (isset($_POST['form_nome'])) ? $_POST['form_nome'] : '';//trata a variável nome
$php_cidade  = (isset($_POST['form_cidade'])) ? $_POST['form_cidade'] : '';//trata a variável cidade
$php_estado  = (isset($_POST['form_estado'])) ? $_POST['form_estado'] : ''; //trata a variável estado
$php_email = (isset($_POST['php_email'])) ? $_POST['php_email'] : ''; //trata a variável e-mail
$php_assunto_mensagem  = (isset($_POST['form_assunto_mensagem'])) ? $_POST['form_assunto_mensagem'] : ''; //trata a variável assunto
$php_mensagem = (isset($_POST['php_mensagem'])) ? $_POST['php_mensagem'] : '';//trata a variável mensagem

$sql = mysqli_query($con, "INSERT INTO contato(nome,cidade,estado,email,assunto_mensagem,mensagem)VALUES('$php_nome','$php_cidade','$php_estado','$php_email','$php_assunto_mensagem','$php_mensagem')"); 
echo "<center><h1>Enviado com sucesso</h1></center>";
?>
<a href="painel.php">Clique aqui para voltar ao painel.</a>
</body>
</html>
