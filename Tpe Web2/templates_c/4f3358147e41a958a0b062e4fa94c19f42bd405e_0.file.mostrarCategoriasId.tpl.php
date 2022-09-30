<?php
/* Smarty version 4.2.1, created on 2022-09-30 21:14:51
  from 'C:\xampp3\htdocs\tpeWeb\Tpe Web2\templates\mostrarCategoriasId.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6337402b448ec6_52681735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f3358147e41a958a0b062e4fa94c19f42bd405e' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\tpeWeb\\Tpe Web2\\templates\\mostrarCategoriasId.tpl',
      1 => 1664553190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6337402b448ec6_52681735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1> Elegir cat </h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
    <li><a href='items-cat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->ID;?>
'> Nombre <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
 </a></li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
