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
        header("Location: " . BASE_URL ."lista-cat");
    }
    
    function mostrarFormModificarCat($datos){
        $this->smarty->assign('Nombre',$datos->nombre);
        $this->smarty->assign('Descripcion',$datos->descripcion);
        $this->smarty->display('formulariomodcat.tpl');
    }

    function mostrarFormIngreso(){
        $this->smarty->assign('Nombre',"");
        $this->smarty->assign('Descripcion',"");
        $this->smarty->display('formulariomodcat.tpl');
    }
    
}