<?php
require_once ('./libs/smarty-4.2.1/libs/Smarty.class.php');
class vistaProducto{
    
    private $smarty;

    function __construct(){
        $this->smarty=new Smarty();
    }

    function mostrarProductos($productos){
       $this->smarty->assign('productos',$productos);
       $this->smarty->display('mostrarProductos.tpl');
    }
    function mostrarProducto($producto,$categoria){
        $this->smarty->assign('producto',$producto);
        $this->smarty->assign('categoria',$categoria);
        $this->smarty->display('detallesProducto.tpl');
        }
    function mostrarFormIngreso(){
        
        $this->smarty->display('formularioalta.tpl');
    }
    function mostrarError(){
        $this->smarty->display('error.tpl');
    }
    function mostrarFormModificarProd($producto,$cat){
        $this->smarty->assign('Nombre',$producto->nombre);
        $this->smarty->assign('Descripcion',$producto->descripcion);
        $this->smarty->assign('Precio',$producto->precio);
        $this->smarty->assign('Marca',$producto->marca);
        $this->smarty->assign('Categoria',$cat->nombre);
        $this->smarty->assign('accion',0);
        $this->smarty->display('formulariomod.tpl');
    }
    function redireccionarHome(){
        header("Location: " . BASE_URL);
    }    
}
