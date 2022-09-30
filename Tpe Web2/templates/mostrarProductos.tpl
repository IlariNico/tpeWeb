{include file="header.tpl"}

<ul>
    {foreach from=$productos item=$producto }
        
            <li> Nombre {$producto->nombre}, {$producto->marca} <a href='mostrarprod/{$producto->ID}'>Ver mas </a> </li>
        
       
    {/foreach}
</ul>
{include file="footer.tpl"}
