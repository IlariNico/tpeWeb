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
            $p=$this->modelo->obtenerProducto($id);
            if($p!=NULL){
                return true;
            }
            else 
                return false;
        }
        else
            return false;
    }


    function mostrarProductosPorCat($idcat){
        $productos=$this->modelo->obtenerProductosPorCat($idcat);
        $this->vista->mostrarProductos($productos);
    }

    function verificarDato($dato){
        return (isset($dato)&&!empty($dato));
    }

    function verificarDatos(){
        return ((isset($_POST['nombre'])&&!empty($_POST['nombre']))&&(isset($_POST['descripcion'])&&!empty($_POST['descripcion']))
    &&(isset($_POST['marca'])&&!empty($_POST['marca']))&&(isset($_POST['precio'])&&!empty($_POST['precio']))&&
    (isset($_POST['categoria'])&&!empty($_POST['categoria'])));
    }

    function agregarProducto(){    
        if($this->verificarDatos()){
            $idcat=$this->modeloCat->existeCat($_POST['categoria']);
            if($this->verificarDato($idcat)){
                $this->modelo->insertarProducto($_POST,$idcat);
                $this->vista->redireccionarHome();
            }
            else
            $this->vista->mostrarFormIngreso();
        }
        else{
            
            $this->vista->mostrarFormIngreso();
        }
        
    }

    function borrarProducto($id){
        if($this->corroborarId($id)){
            $producto=$this->modelo->obtenerProducto($id);
            if($producto!=null){
                $this->modelo->eliminarProducto($id);
                $this->vista->redireccionarHome();
            }
            else{
                $this->vista->mostrarError();
            }
        }
    }

    function mostrarProducto($id){
        if($this->corroborarId($id)){
            $producto=$this->modelo->obtenerProducto($id);
            $categoriaProd=$this->modeloCat->obtenerCategoria($producto->id_categoria);
            $this->vista->mostrarProducto($producto,$categoriaProd);
        }
        else{
            $this->vista->mostrarError();
        }
    }
    function modificarProducto($id){
        if($this->corroborarId($id)){
            if($this->verificarDatos()){
                $idcat=$this->modeloCat->existeCat($_POST['categoria']);
                if($this->verificarDato($idcat)){
                    $this->modelo->modificarProducto($id,$_POST,$idcat);
                    $this->vista->redireccionarHome();
                }
            }
            $producto=$this->modelo->obtenerProducto($id);
            $cat=$this->modeloCat->obtenerCategoria($producto->id_categoria);
            $this->vista->mostrarFormModificarProd($producto,$cat);
        }
        else
            $this->vista->redireccionarHome();
        
    }
}