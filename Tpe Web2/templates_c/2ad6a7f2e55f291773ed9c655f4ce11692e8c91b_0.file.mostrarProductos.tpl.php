<?php
/* Smarty version 4.2.1, created on 2022-09-30 21:13:21
  from 'C:\xampp3\htdocs\tpeWeb\Tpe Web2\templates\mostrarProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63373fd1649006_37882443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ad6a7f2e55f291773ed9c655f4ce11692e8c91b' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\tpeWeb\\Tpe Web2\\templates\\mostrarProductos.tpl',
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
function content_63373fd1649006_37882443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
        
            <li> Nombre <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
, <?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
 <a href='mostrarprod/<?php echo $_smarty_tpl->tpl_vars['producto']->value->ID;?>
'>Ver mas </a> </li>
        
       
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
