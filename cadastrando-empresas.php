<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema";
$con= mysqli_connect("$host","$user","$pass", "$db") or die (mysql_error()); 
?>

<html>
 <head>
  <meta charset="UTF-8">
 <title> Cadastrando </title> 
 </head>
 <body>
 <form name="signup" method="post" action="cadastrando.php">
    
  
  <tr>
<label for="cod_estados">Estado:</label>
		<select  required name="form_cod_estados" id="cod_estados">
			<option value=""></option>
			<?php
				$sql = "SELECT cod_estados, sigla
						FROM estados
						ORDER BY sigla";
				$res = mysqli_query( $sql );
				while ( $row = mysqli_fetch_assoc( $res ) ) {
					echo '<option value="'.$row['cod_estados'].'">'.$row['sigla'].'</option>';
				}
			?>
		</select>

		<label for="cod_cidades">Cidade:</label>
		<span class="carregando">Aguarde, carregando...</span>
		<select  required name="form_cod_cidades" id="cod_cidades">
			<option value="">-- Escolha uma cidade --</option>
		</select>

		<script src="http://www.google.com/jsapi"></script>
		<script type="text/javascript">
		  google.load('jquery', '1.3');
		</script>		

		<script type="text/javascript">
		$(function(){
			$('#cod_estados').change(function(){
				if( $(this).val() ) {
					$('#cod_cidades').hide();
					$('.carregando').show();
					$.getJSON('cidades.ajax.php?search=',{cod_estados: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value=""></option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].cod_cidades + '">' + j[i].nome + '</option>';
						}	
						$('#cod_cidades').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#cod_cidades').html('<option value="">– Escolha um estado –</option>');
				}
			});
		});
		</script> 
 
    </tr>
    <tr>
  </tr>


<!-- DADOS DE LOGIN -->
  <tr>
   <td>
    <label for="email">E-mail: </label>
   </td>
   <td align="left">
    <input type="text" name="email"></td>
  </tr>
  <tr>
   <td>
    <label for="pass">Senha: </label>
   </td>
   <td align="left">
    <input type="password"  required name="pass">
   </td>
  </tr>
 </table>
</fieldset>
<br />
<input type="submit">
<input type="reset" value="Limpar">
</form>
 </body>
</html>
