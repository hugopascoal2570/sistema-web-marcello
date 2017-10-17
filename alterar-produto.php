<?php
include("conexao.php"); 
?>

<?php

$buscar =$_POST['buscar'];
$sql = mysqli_query ($con, "SELECT * FROM produtos WHERE nomeproduto LIKE '%".$buscar."%'"); 
$row= mysqli_num_rows($sql);
//conta quantos dados tem no banco com o nomeproduto igual ao digitado
if($row > 0){
while($linha = mysqli_fetch_array($sql)){
		echo "Nome do produto: ".$linha['nomeproduto']."<br>";
		echo "Categoria do Produto: ".$linha['categoriaproduto']."<br>";
		echo "Marca Produto: ".$linha['marcaproduto']."<br>";
		echo "Valor do Produto: R$ ".$linha['valorproduto']."<br>";
		echo"</br>";
		echo"</br>";
	}
	}else{
echo"Produto não encontrado";
}

?>