{include file="header.tpl"}
<h1> Elegir cat </h1>
{foreach from=$categorias item=$categoria}
    <li><a href='items-cat/{$categoria->ID}'> Nombre {$categoria->nombre} </a></li>
{/foreach}
{include file="footer.tpl"}