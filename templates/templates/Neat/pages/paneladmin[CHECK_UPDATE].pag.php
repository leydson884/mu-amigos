<h4 class="heading colr">Verificar Atualiza&ccedil;&otilde;es</h4>
	   <blockquote>
	   <p>Existe uma nova atualiza&ccedil;&atilde;o:</p>
       <br />
       <ul style="list-style: none;">
       	<li>&raquo; Vers&atilde;o atual: {Web_Version}</li>
        <li>&raquo; Nova Vers&atilde;o: <b class="colr">{%UPDATE[New_Version]%}</b></li>
        <li>&raquo; Release Date: <b>{%UPDATE[Release_Date]%}</b></li>
       </ul>
     <br />
     <h4 class="heading">Base ChangeLog:</h4>
     <blockquote>
     {%UPDATE[ChangeLog]%}
     </blockquote>
     
    <input type="button" value="ChangeLog Completo" onclick="window.open('{%UPDATE[Link_ChangeLog]%}', 'windowname1'); return false;" class="btnform">&nbsp;<input type="button" value="Mais Informa&ccedil;&otilde;es" onclick="window.open('{%UPDATE[Link_Topic]%}', 'windowname2'); return false;" class="btnform">
	</blockquote>