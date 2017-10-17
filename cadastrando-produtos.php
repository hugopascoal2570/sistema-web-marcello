<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema";
$con= mysqli_connect("$host","$user","$pass", "$db") or die  ("Não foi possivel conectar com o mysql mysql"); 
?> 

<form enctype="multipart/form-data" method="post" action="cadastro-produto.php">
<?php echo "Cadastro de produtos:<br></br>";?>
  <tr>
   <td> 
    <label >Nome do produto: </label>
   </td>
   <td align="left">  
    <input type="text"  required name="nomeproduto">
    </p>
   <td>categoria do produto:     </label>
  <input type="text"  required name="categoriaproduto"></td>
   <td align="left"><p>Marca do produto:
     <input type="text"  required name="marcaproduto">
   </p></td>
  </tr>
  <td>Valor do produto    </label>
   <input type="text"  required name="valorproduto"></td>
   <td align="left">&nbsp;</td>
  </tr>
<tr>
   <td></label>
   </td>
   <td align="left"><br>
   </td>
   <td>
   </td>
   <td align="left"><p><br>
   </p>
     <p>
       <input type="submit">
           <a href="painel-empresa.php">Clique para voltar</a> 

  </form>
