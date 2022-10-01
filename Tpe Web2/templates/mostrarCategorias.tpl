{include file="header.tpl"}

<table class="table text-center mt-4">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$categorias item=$categoria}
        <tr>
        <td>{$categoria->nombre}</td>
        <td>{$categoria->descripcion}</td>
        <td>
            <a class="btn btn-success" href='modificar-cat/{$categoria->ID}'>
                modificar 
            </a>
            <a class="btn btn-danger" href='borrar-cat/{$categoria->ID}'>
                    eliminar 
            </a>
            <a class="btn btn-info " href='items-cat/{$categoria->ID}'>
                    items x cat
            </a> 
        </td>
        </tr>
    {/foreach}
</table>

{include file="footer.tpl"}