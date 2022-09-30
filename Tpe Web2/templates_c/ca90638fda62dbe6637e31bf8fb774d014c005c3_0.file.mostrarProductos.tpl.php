<?php
/* Smarty version 4.2.1, created on 2022-09-30 17:09:26
  from 'C:\xampp\htdocs\Tpe Web2\templates\mostrarProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633706a6c81b73_31502257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca90638fda62dbe6637e31bf8fb774d014c005c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe Web2\\templates\\mostrarProductos.tpl',
      1 => 1664550565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633706a6c81b73_31502257 (Smarty_Internal_Template $_smarty_tpl) {
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
