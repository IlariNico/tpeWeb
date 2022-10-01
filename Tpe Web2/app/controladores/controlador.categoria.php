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

    function verificarDatos(){
        return ((isset($_POST['nombre'])&&!empty($_POST['nombre']))&&(isset($_POST['descripcion'])&&!empty($_POST['descripcion'])));
    }

    private function corroborarId($id){
        if (isset($id)&&!empty($id)){
            $c=$this->modelo->obtenerCategoria($id);
            if($c!=NULL){
                return true;
            }
            else 
                return false;
        }
        else
            return false;
    }

    function agregarCategoria(){
        if($this->verificarDatos()){
            $this->modelo->insertarCategoria($_POST);
            $this->vista->redireccionarHome();

        }
        else{
            $this->vista->mostrarFormIngreso();
        }
    }

    function borrarCategoria($id){
        if($this->corroborarId($id)){
            $this->modelo->eliminarCategoria($id);
            $this->vista->redireccionarHome();
        }
        else{
            $this->vista->redireccionarHome();
        }
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