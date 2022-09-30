<?php

require_once './app/modelos/modelo.categoria.php';
require_once './app/vistas/vista.categoria.php';
class controladorCategoria{
    private $modelo;
    private $vista;
    public function __construct(){
        $this->modelo=new modeloCategoria();
        $this->vista=new vistaCategoria();
    }


    function itemsPorCat($id){
        if(isset($id)&&!empty($id)){
            $this->modelo->obtenerProductosConCat($id);
        }
        else{

        }
    }

    function mostrarCategoriasId(){
        $categorias=$this->modelo->obtenerCategorias();
        $this->vista->mostrarCategoriasId($categorias);
    }
    
    function mostrarCategorias(){
        $categorias=$this->modelo->obtenerCategorias();
        $this->vista->mostrarCategorias($categorias);
    }
}