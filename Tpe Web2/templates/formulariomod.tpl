{include file="header.tpl"}
<form action="" method="POST">
  <div class="mb-3">
    <label  class="form-label">Nombre Producto</label>
    <input name="nombre" type="text" class="form-control" placeholder="{$Nombre}">
  </div>
  <div class="mb-3">
    <label  class="form-label">Descripción</label>
    <input name="descripcion" type="text" class="form-control" placeholder="{$Descripcion}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Marca</label>
    <input name="marca" type="text" class="form-control" placeholder="{$Marca}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Precio</label>
    <input name="precio" type="number" class="form-control" placeholder="{$Precio}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Categoría</label>
    <input name="categoria" type="text" class="form-control" placeholder="{$Categoria}" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
{include file="footer.tpl"}