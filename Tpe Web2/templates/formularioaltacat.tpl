{include file="header.tpl"}
<form action="agregar-cat" method="POST">
  <div class="mb-3">
    <label  class="form-label">Nombre Cat</label>
    <input name="nombre" type="text" class="form-control" placeholder="Nombre">
  </div>
  <div class="mb-3">
    <label  class="form-label">Descripción</label>
    <input name="descripcion" type="text" class="form-control" placeholder="Descripcion" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
{include file="footer.tpl"}