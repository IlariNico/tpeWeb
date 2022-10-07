{include file="header.tpl"}

<section class="d-flex flex-row mt-3 flexflexible">
    {foreach from=$productos item=$producto }
        
        <div class="card ms-2 mt-2" style="width: 18rem;">
            <img src="{$producto->imagen}" class="img-thumbnail" alt="{$producto->nombre}">
            <div class="card-body ">
                <h5 class="card-title">{$producto->nombre}</h5>
                <p class="card-text">{$producto->descripcion}</p>
                <div class="d-flex flex-row ocupatodo">
                    <a href="mostrarprod/{$producto->ID}" class="btn btn-primary ">Ver</a>
                    <a class="btn btn-danger" href='borrar/{$producto->ID}'>Eliminar </a>
                    <a class="btn btn-success" href='modificar-producto/{$producto->ID}'>Modificar </a>
                </div>
            </div>
        </div>
        
       
    {/foreach}
</section>
{include file="footer.tpl"}
