<script type="text/javascript">
function Delete_Ticket()
{
	var Check = confirm('Atencao\r\nTem certeza que deseja deletar este Ticket?');
	if (Check == true)
	{
		CTM_Load('?pag=paneladmin&str=VIEW_TICKET&cmd=delete&id={Ticket_ID}','Command','POST',BuscaElementosForm('Manage_Ticket'));
		return true;
	}
}
</script>
<h4 class="heading colr">Ticket {Ticket_Title}</h4>
	<blockquote>
	<table border="0" width="305">
 			 <tr>
   			 <td width="135"><img src="{Ticket_Char#Image}" width="120" height="120" style="border: 1px solid #B3B3B3;" class="image" /></td>
   			 <td width="493"><table border="0">
				 <tr>
       			 <td><blockquote>Postado por: <b class="colr">{Ticket_Char}</b> em <b class="colr">{Ticket_Date}</b> as <b class="colr">{Ticket_Time}</b><br />Departamento: <b class="colr=">{Ticket_Subject}</b><br />Protocolo: <b class="red">{Ticket_Protocol}</b></blockquote></td>
				 </tr>
				 <tr>
       			 <td><blockquote>{Ticket_Text}</blockquote></td>
				 </tr>
    			</table>
				</td>
  			</tr>
			</table>
		</blockquote>
		{Resp_List}
		<h4 class="heading colr">Gerenciar Ticket</h4>
	<blockquote>
	<form name="Manage_Ticket" id="Manage_Ticket">
<table width="452" border="0">
			<tr align="center">
        <td width="146" height="35"><select onchange="selTexto('Text', '['+this.options[this.selectedIndex].value+']', '[/'+this.options[this.selectedIndex].value+']');">
               <option value="0" disabled="disabled" selected="selected">Selecione uma Cor</option>
               <option value="red">Vermelho</option>
               <option value="white">Branco</option>
               <option value="blue">Azul Escuro</option>
               <option value="yellow">Amarelho</option>
               <option value="green">Verde Escuro</option>
               <option value="violet">Violeta</option>
               <option value="gray">Cinza Escuro</option>
               <option value="lime">Verde Lim&atilde;o</option>
               <option value="silver">Cinza Claro</option>
               <option value="pink">Rosa</option>
               <option value="navy">Azul Marinho</option>
               <option value="aqua">Azul &Aacute;gua</option>
            </select></td>
        <td width="296"><a href="javascript: void(EffectWeb);" onclick="selTexto('Text', '[b]', '[/b]');"><img src="images/icons/bbcode/text_bold.png" border="0" /></a><a href="javascript: void(EffectWeb);" onclick="selTexto('Text', '[i]', '[/i]');"><img src="images/icons/bbcode/text_italic.png" border="0" /></a><a href="javascript: void(EffectWeb);" onclick="selTexto('Text', '[u]', '[/u]');"><img src="images/icons/bbcode/text_underline.png" border="0" /></a><a href="javascript: void(EffectWeb);" onclick="selTexto('Text', '[s]', '[/s]');"><img src="images/icons/bbcode/text_strikethrough.png" border="0" /></a><a href="javascript: void(EffectWeb);" onclick="selTexto('Text', '[h1]', '[/h1]');"><img src="images/icons/bbcode/text_heading_1.png" border="0" /></a><a href="javascript: void(EffectWeb);" onclick="selTexto('Text', '[left]', '[/left]');"><img src="images/icons/bbcode/text_align_left.png" border="0" /></a><a href="javascript: void(EffectWeb);" onclick="selTexto('Text', '[center]', '[/center]');"><img src="images/icons/bbcode/text_align_center.png" border="0" /></a><a href="javascript: void(EffectWeb);" onclick="selTexto('Text', '[right]', '[/right]');"><img src="images/icons/bbcode/text_align_right.png" border="0" /></a></td>
      </tr>
      <tr>
        <td align="center" colspan="33"><textarea name="Text" id="Text" cols="35" rows="7"></textarea><br />&nbsp;</td>
      </tr>
      <tr>
        <td align="center" colspan="33"><input type="button" value="Responder Ticket" onclick="CTM_Load('?pag=paneladmin&str=VIEW_TICKET&cmd=resp&id={Ticket_ID}','Command','POST',BuscaElementosForm('Manage_Ticket'));" class="btnform">{Ticket_Define}{%DELETE_BUTTON%}</td>
      </tr>
	  </table>
	  </form>
	  </blockquote>
	  <div id="Command"></div>