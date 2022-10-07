<?php
/* Smarty version 4.2.1, created on 2022-10-04 18:53:10
  from 'C:\xampp\htdocs\Tpe Web2\templates\detallesProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633c64f6d3e291_79160381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c89c719fb9d84fcc78a759330af91f8e857a5be0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe Web2\\templates\\detallesProducto.tpl',
      1 => 1664902389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633c64f6d3e291_79160381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class=" mt-5">
    <div class="d-flex flex-row justify-content-sm-evenly">
        <img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
" class="img-thumbnail" width="500">
        <div class="d-flex flex-column ms-2">
            <h1><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h1>
            <hr></hr>
            <h2 class="mt-3">$<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</h2>
            <hr></hr>
            <p class="mt-3"><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</p>

            <table class="table text-center mt-4 ">
                <thead>
                    <tr>
                        <th scope="col">Marca</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Desc. Cat.</th>
                
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
</td>
                    </tr>
            </table>
            <a href='' class="btn btn-primary btn-lg ms-5 mt-3">Volver inicio</a>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
