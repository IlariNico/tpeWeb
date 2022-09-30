<?php
/* Smarty version 4.2.1, created on 2022-09-30 16:44:44
  from 'C:\xampp\htdocs\Tpe Web2\templates\detallesProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633700dc1d1181_40006702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c89c719fb9d84fcc78a759330af91f8e857a5be0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe Web2\\templates\\detallesProducto.tpl',
      1 => 1664549081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633700dc1d1181_40006702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1> Nombre <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
, Marca <?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
  Descripcion <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
 Categoria <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
 <a href=''>Volver </a> </h1>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
