<!DOCTYPE html>

<html>
    <head>
        <title>Formulário de Contato</title>
     <meta charset="utf-8">

    </head>

    <body

    <center>
        <p>
            Formulário de Contato
        </p>
    </center>
    <form name="formulario" method="post" action="enviar.php">
<p>Nome:<input type="text" name="form_nome" size="30" nome="nome">
   </p>
   Cidade:<input type="text" name="form_cidade" size="30" >
<p>
Estado<select name="form_estado" >
<option value="Escolha seu Estado">Escolha seu Estado</option>
<option value="AC">AC</option>
<option value="AL">AL</option> 
<option value="AM">AM</option>
<option value="AP">AP</option>
<option value="BA">BA</option>
<option value="CE">CE</option>
<option value="DF">DF</option>
<option value="ES">ES</option>
<option value="GO">GO</option>
<option value="MA">MA</option>
<option value="MG">MG</option>
<option value="MT">MT</option>
<option value="MS">MS</option>
<option value="PA">PA</option>
<option value="PB">PB</option>
<option value="PE">PE</option>
<option value="PI">PI</option>
<option value="PR">PR</option>
<option value="RJ">RJ</option>
<option value="RN">RN</option>
<option value="RO">RO</option>
<option value="RR">RR</option>
<option value="RS">RS</option>
<option value="SC">SC</option>
<option value="SE">SE</option>
<option value="SP">SP</option>
<option value="TO">TO</option>
	</select>
</p>
             
<p>
E-mail:<input type="text" name="form_email"  size="34"></p>
<p>
Assunto da mensagem: <select name="form_assunto_mensagem">
                        <option value="Opniao" selected>Opnião</option>
                        <option value="Sugest">Sugestão</option>
                        <option value="Parcer">Parceria</option>
                        <option value="Reclam">Reclamação</option>
                        <option value="outros">Outros</option>
                      </select>
      </p>
                  <p><font class="texto">Mensagem</font></p> 
                      <textarea name="form_mensagem" size="2000" >
                      </textarea>
                    </p>
                    <p>
                      <input type="submit" name="Enviar" value="Enviar ">
                      <input type="reset" name="Limpar" value="Limpar">
                    </p>
                   
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>
