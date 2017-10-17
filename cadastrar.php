<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema";
$con= mysqli_connect("$host","$user","$pass", "$db") or die(mysql_error()); 

?> 
<html>
 <head>
  <meta charset="UTF-8">
 <title> Cadastrando </title> 
 </head>
 <body>
 <form name="signup" method="post" action="cadastrando.php">
    
  <!-- DADOS PESSOAIS-->
  <fieldset>
 <legend></legend>
 <p>&nbsp;</p>
 <legend></legend>
 <legend></legend>
 <legend>Dados Pessoais</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="form_nome">Nome: </label>
   </td>
   <td align="left">
    <input type="text"  required name="nome">
   </td>
   <td>
    <label for="form_sobrenome">Sobrenome: </label>
   </td>
   <td align="left">
    <input type="text"  required name="sobrenome">
   </td>
  </tr>
  <tr>
   <td>
    <label>Nascimento: </label>
   </td>
   <td align="left">
    <input type="text" name="form_dia" size="2" maxlength="2" value="dd"> 
   <input type="text" name="form_mes" size="2" maxlength="2" value="mm"> 
   <input type="text" name="form_ano" size="4" maxlength="4" value="aaaa">
   </td>
  </tr>
  <tr>
   <td>
    <label for="rg">RG: </label>
   </td>
   <td align="left">
    <input type="text" required name="form_rg" size="13" maxlength="13"> 
   </td>
  </tr>
  <tr>
   <td>
    <label>CPF:</label>
   </td>
   <td align="left">
    <input type="text" name="form_cpf" size="9" maxlength="9"> 
     <input type="text" name="form_cpf2" size="2" maxlength="2">
      </tr>
 </table>
</fieldset>

<br />
<!-- ENDEREÇO -->
<fieldset>
 <legend>Dados de Endereço</legend>
 <table cellspacing="10">

  <tr>
   <td>
    <label for="rua">Rua:</label>
   </td>
   <td align="left">
    <input type="text" required name="form_rua">
   </td>
   <td>
    <label for="numero">Numero:</label>
   </td>
   <td align="left">
    <input type="text" name="form_numero" size="4">
   </td>
  </tr>
  <tr>
   <td>
    <label for="bairro">Bairro: </label>
   </td>
   <td align="left">
    <input type="text" required name="form_bairro">
   </td>
  </tr>
  <tr>
<label for="cod_estados">Estado:</label>
    <select name="cod_estados" id="cod_estados">
      <option value=""></option>
      <?php
        $sql = "SELECT cod_estados, sigla
            FROM estados
            ORDER BY sigla";
        $res = mysqli_query( $con, $sql );
        while ( $row = mysqli_fetch_assoc( $res ) ) {
          echo '<option value="'.$row['cod_estados'].'">'.$row['sigla'].'</option>';
        }
      ?>
    </select>

    <label for="cod_cidades">Cidade:</label>
    <span class="carregando">Aguarde, carregando...</span>
    <select name="cod_cidades" id="cod_cidades">
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
          $('#cod_cidades').html('<option value=""> Escolha uma cidade </option>');
        }
      });
    });
    </script> 
    </tr>
    <tr>
  </tr>
  <tr>
   <td>
    <label for="cep">CEP: </label>
   </td>
   <td align="left">
    <input type="text" required name="cep" size="5" maxlength="5"> 
     <input type="text" required name="cep2" size="3" maxlength="3">
   </td>
  </tr>
 </table>
</fieldset>
<br />

<!-- DADOS DE LOGIN -->
<fieldset>
 <legend>Dados de login</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="email">E-mail: </label>
   </td>
   <td align="left">
    <input type="text" name="email"></td>
  </tr>
  <tr>
   <td>
    <label for="login">Login de usuário: </label>
   </td>
   <td align="left">
    <input type="text" required name="login">
   </td>
  </tr>
  <tr>
   <td>
    <label for="pass">Senha: </label>
   </td>
   <td align="left">
    <input type="password"  required name="pass">
   </td>
  </tr>
  <tr>
   <td>
    <label for="passconfirm">Confirme a senha: </label>
   </td>
   <td align="left">
    <input type="password" required name="passconfirm">
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
