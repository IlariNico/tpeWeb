<?php
/* Smarty version 4.2.1, created on 2022-10-01 19:20:35
  from 'C:\xampp\htdocs\Tpe Web2\templates\mostrarCategoriasId.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633876e391b7a1_76276250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d6962d0a422ee2619503ebe0e077ed9af1810f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe Web2\\templates\\mostrarCategoriasId.tpl',
      1 => 1664644833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633876e391b7a1_76276250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="text-center mt-4"> Elegir cat </h1>
<ul class="list-group mt-4">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
    <li class='list-group-item d-flex justify-content-between align-items-center'><a href='items-cat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->ID;?>
'><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
 </a></li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
