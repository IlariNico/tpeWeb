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
}
