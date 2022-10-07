{include file="header.tpl"}
<div class=" mt-5">
    <div class="d-flex flex-row justify-content-sm-evenly">
        <img src="{$producto->imagen}" class="img-thumbnail" width="500">
        <div class="d-flex flex-column ms-2">
            <h1>{$producto->nombre}</h1>
            <hr></hr>
            <h2 class="mt-3">${$producto->precio}</h2>
            <hr></hr>
            <p class="mt-3">{$producto->descripcion}</p>

            <table class="table text-center mt-4 ">
                <thead>
                    <tr>
                        <th scope="col">Marca</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Desc. Cat.</th>
                
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>{$producto->marca}</td>
                    <td>{$categoria->nombre}</td>
                    <td> {$categoria->descripcion}</td>
                    </tr>
            </table>
            <a href='' class="btn btn-primary btn-lg ms-5 mt-3">Volver inicio</a>
        </div>
    </div>
</div>
{include file="footer.tpl"}