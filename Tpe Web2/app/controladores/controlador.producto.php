<?php

require_once './app/modelos/modelo.producto.php';
require_once './app/vistas/vista.producto.php';
require_once './app/modelos/modelo.categoria.php';

class controladorProducto{
    private $modelo;
    private $modeloCat;
    private $vista;
    public function __construct(){
        $this->modelo=new modeloProducto();
        $this->vista=new vistaProducto();
        $this->modeloCat=new modeloCategoria();
    }

    function mostrarProductos(){
        $productos=$this->modelo->obtenerTodosLosProductos();
        $this->vista->mostrarProductos($productos);
    }

    private function corroborarId($id){
        if (isset($id)&&!empty($id)){
            return true;
        }
        else
            return false;
    }

    function mostrarProductosPorCat($idcat){
        $productos=$this->modelo->obtenerProductosPorCat($idcat);
        $this->vista->mostrarProductos($productos);
    }

    function mostrarProducto($id){
        if($this->corroborarId($id)){
            $producto=$this->modelo->obtenerProducto($id);
            $categoriaProd=$this->modeloCat->obtenerCategoria($producto->id_categoria);
            $this->vista->mostrarProducto($producto,$categoriaProd);
        }
        else{
            echo "no";
        }
    }
}