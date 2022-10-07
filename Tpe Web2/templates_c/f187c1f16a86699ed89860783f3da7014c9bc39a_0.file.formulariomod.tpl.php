<?php
/* Smarty version 4.2.1, created on 2022-10-04 19:13:46
  from 'C:\xampp\htdocs\Tpe Web2\templates\formulariomod.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633c69ca74f914_62247122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f187c1f16a86699ed89860783f3da7014c9bc39a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe Web2\\templates\\formulariomod.tpl',
      1 => 1664903619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633c69ca74f914_62247122 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label">Nombre Producto</label>
    <input name="nombre" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Nombre']->value;?>
">
  </div>
  <div class="mb-3">
    <label  class="form-label">Descripción</label>
    <input name="descripcion" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Descripcion']->value;?>
" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Marca</label>
    <input name="marca" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Marca']->value;?>
" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Precio</label>
    <input name="precio" type="number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Precio']->value;?>
" >
  </div>
  <select class="form-select" name="categoria" aria-label="Default select example">
    <option selected>Categorias</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->ID;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </select>
  <div class="mb-3">
    <label  class="form-label">Imagen</label>
    <input name="imagen" type="file" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
