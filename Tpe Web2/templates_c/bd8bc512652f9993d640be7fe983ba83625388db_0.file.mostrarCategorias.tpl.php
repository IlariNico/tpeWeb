<?php
/* Smarty version 4.2.1, created on 2022-10-01 19:33:36
  from 'C:\xampp\htdocs\Tpe Web2\templates\mostrarCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633879f0bb5924_14824527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd8bc512652f9993d640be7fe983ba83625388db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe Web2\\templates\\mostrarCategorias.tpl',
      1 => 1664645615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633879f0bb5924_14824527 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table text-center mt-4">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
        <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
</td>
        <td>
            <a class="btn btn-success" href='modificar-cat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->ID;?>
'>
                modificar 
            </a>
            <a class="btn btn-danger" href='borrar-cat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->ID;?>
'>
                    eliminar 
            </a>
            <a class="btn btn-info " href='items-cat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->ID;?>
'>
                    items x cat
            </a> 
        </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
