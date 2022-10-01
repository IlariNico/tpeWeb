{include file="header.tpl"}

<ul class="list-group mt-4">
    {foreach from=$productos item=$producto }
        
            <li class='list-group-item d-flex justify-content-between align-items-center'> 
                
                Nombre {$producto->nombre}, {$producto->marca} 
                <div class="ml-auto">
                <a class="btn btn-info " href='mostrarprod/{$producto->ID}'>
                    Ver mas 
                </a> 
                <a class="btn btn-danger" href='borrar/{$producto->ID}'>
                    eliminar 
                </a>
                <a class="btn btn-success" href='modificar-producto/{$producto->ID}'>
                    modificar 
                </a>
                </div>
            </li>
        
       
    {/foreach}
</ul>
{include file="footer.tpl"}
