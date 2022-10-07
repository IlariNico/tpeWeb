{include file="header.tpl"}
<form action="" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label">Nombre Producto</label>
    <input name="nombre" type="text" class="form-control" value="{$Nombre}">
  </div>
  <div class="mb-3">
    <label  class="form-label">Descripción</label>
    <input name="descripcion" type="text" class="form-control" value="{$Descripcion}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Marca</label>
    <input name="marca" type="text" class="form-control" value="{$Marca}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Precio</label>
    <input name="precio" type="number" class="form-control" value="{$Precio}" >
  </div>
  <select class="form-select" name="categoria" aria-label="Default select example">
    <option selected>Categorias</option>
    {foreach from=$Categorias item=$categoria }
      <option value="{$categoria->ID}">{$categoria->nombre}</option>
    {/foreach}
  </select>
  <div class="mb-3">
    <label  class="form-label">Imagen</label>
    <input name="imagen" type="file" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
{include file="footer.tpl"}