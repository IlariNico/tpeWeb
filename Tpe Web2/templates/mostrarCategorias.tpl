{include file="header.tpl"}
<ul>
    {foreach from=$categorias item=$categoria}
        
        <li>  Nombre {$categoria->nombre}</li>
        
    {/foreach}
    
</ul>
{include file="footer.tpl"}