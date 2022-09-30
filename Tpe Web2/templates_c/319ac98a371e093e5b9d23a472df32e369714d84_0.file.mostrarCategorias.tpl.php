<?php
/* Smarty version 4.2.1, created on 2022-09-30 18:19:26
  from 'C:\xampp3\htdocs\tpeWeb\Tpe Web2\templates\mostrarCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6337170eddefa6_28959948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '319ac98a371e093e5b9d23a472df32e369714d84' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\tpeWeb\\Tpe Web2\\templates\\mostrarCategorias.tpl',
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
function content_6337170eddefa6_28959948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
        
        <li>  Nombre <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</li>
        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
</ul>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
