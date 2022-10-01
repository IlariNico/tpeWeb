<?php
/* Smarty version 4.2.1, created on 2022-10-01 19:43:46
  from 'C:\xampp\htdocs\Tpe Web2\templates\formularioaltacat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63387c52948364_22742681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee9b15c8cc97ce99300d345bb7719d5491bce3cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe Web2\\templates\\formularioaltacat.tpl',
      1 => 1664646104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63387c52948364_22742681 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
