<script type="text/javascript">
function Delete_File()
{
	var Check = confirm('Atencao\r\nTem certeza que deseja deletar este Arquivo?');
	if (Check == true)
	{
		CTM_Load('?pag=paneladmin&str=EDIT_FILE&cmd=true', 'While', 'POST',BuscaElementosForm('Manage_Files'));
		return true;
	}
}
</script>
<h4 class="heading colr">Gerenciar Arquivos</h4>
	   <blockquote>
	   <form name="Manage_Files" id="Manage_Files" class="form">
		   <strong>Arquivo:</strong> 
           <select name="Id" id="Id">
           {File_List}
		   </select>&nbsp;<input type="button" value="Editar" onclick="CTM_Load('?pag=paneladmin&str=EDIT_FILE','While','POST',BuscaElementosForm('Manage_Files'));" class="btnform">
           <input type="button" value="Deletar Arquivo" onclick="Delete_File()" class="btnform">
		   </form>
	</blockquote>
	<div id="While"></div>