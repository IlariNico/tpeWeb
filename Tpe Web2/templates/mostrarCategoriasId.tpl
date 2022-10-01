{include file="header.tpl"}
<h1 class="text-center mt-4"> Elegir cat </h1>
<ul class="list-group mt-4">
{foreach from=$categorias item=$categoria}
    <li class='list-group-item d-flex justify-content-between align-items-center'><a href='items-cat/{$categoria->ID}'>{$categoria->nombre} </a></li>
{/foreach}
</ul>
{include file="footer.tpl"}