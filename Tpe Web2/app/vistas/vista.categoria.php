<?php

class vistaCategoria{
    private $smarty;

    function __construct(){
        $this->smarty=new Smarty();
    }
    function mostrarCategorias($categorias){
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->display('mostrarCategorias.tpl');
    }

    function mostrarCategoriasId($categorias){
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->display('mostrarCategoriasId.tpl');
    }
    function redireccionarHome(){
        header("Location: " . BASE_URL ."/lista-cat");
    }
    
    function mostrarFormIngreso(){
        
        $this->smarty->display('formularioaltacat.tpl');
    }
    
}