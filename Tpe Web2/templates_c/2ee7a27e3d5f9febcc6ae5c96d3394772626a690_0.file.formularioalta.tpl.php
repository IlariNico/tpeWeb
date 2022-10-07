<?php
/* Smarty version 4.2.1, created on 2022-10-04 04:24:54
  from 'C:\xampp\htdocs\Tpe Web2\templates\formularioalta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633b99761a1a98_97753612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ee7a27e3d5f9febcc6ae5c96d3394772626a690' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe Web2\\templates\\formularioalta.tpl',
      1 => 1664849073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633b99761a1a98_97753612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="agregar-producto" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label">Nombre Producto</label>
    <input name="nombre" type="text" class="form-control" placeholder="Nombre">
  </div>
  <div class="mb-3">
    <label  class="form-label">Descripción</label>
    <input name="descripcion" type="text" class="form-control" placeholder="Descripcion" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Marca</label>
    <input name="marca" type="text" class="form-control" placeholder="Marca" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Precio</label>
    <input name="precio" type="number" class="form-control" placeholder="Precio" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Categoría</label>
    <input name="categoria" type="text" class="form-control" placeholder="Categoria" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Imagen</label>
    <input name="imagen" type="file" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
