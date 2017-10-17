<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema";
$con= mysqli_connect("$host","$user","$pass", "$db") or die  ("Não foi possivel conectar com o mysql mysql");  
mysqli_set_charset( $con, 'utf8');
?>

<?php
$produtonome  = (isset($_POST['nomeproduto'])) ? $_POST['nomeproduto'] : '';
$produtocategoria  = (isset($_POST['categoriaproduto'])) ? $_POST['categoriaproduto'] : '';
$produtomarca  = (isset($_POST['marcaproduto'])) ? $_POST['marcaproduto'] : '';
$produtovalor  = (isset($_POST['valorproduto'])) ? $_POST['valorproduto'] : '';

$sql= mysqli_query($con,"INSERT INTO produtos(nomeproduto,categoriaproduto,marcaproduto,valorproduto) VALUES ('$produtonome','$produtocategoria','$produtomarca','$produtovalor')"); 

if($sql !=0){
echo"produto cadastrado com sucesso";
}else{
echo"Produto não cadastrado, tente novamente";
}

?>