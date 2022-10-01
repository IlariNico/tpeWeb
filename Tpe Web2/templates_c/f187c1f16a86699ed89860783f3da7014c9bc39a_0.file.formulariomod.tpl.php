<?php
/* Smarty version 4.2.1, created on 2022-10-01 03:22:57
  from 'C:\xampp\htdocs\Tpe Web2\templates\formulariomod.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633796714e1707_05418960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f187c1f16a86699ed89860783f3da7014c9bc39a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe Web2\\templates\\formulariomod.tpl',
      1 => 1664587365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633796714e1707_05418960 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="" method="POST">
  <div class="mb-3">
    <label  class="form-label">Nombre Producto</label>
    <input name="nombre" type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['Nombre']->value;?>
">
  </div>
  <div class="mb-3">
    <label  class="form-label">Descripción</label>
    <input name="descripcion" type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['Descripcion']->value;?>
" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Marca</label>
    <input name="marca" type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['Marca']->value;?>
" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Precio</label>
    <input name="precio" type="number" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['Precio']->value;?>
" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Categoría</label>
    <input name="categoria" type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['Categoria']->value;?>
" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
