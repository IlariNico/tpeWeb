<?php

class modeloProducto{
    
    private $db;
    
    public function __construct(){
        $this->db=new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function obtenerTodosLosProductos(){
        $consulta=$this->db->prepare("SELECT * FROM productos");
        $consulta->execute();
        $productos=$consulta->fetchAll(PDO::FETCH_OBJ);
        return ($productos);
    }

    function obtenerProducto($id){
        $consulta=$this->db->prepare("SELECT * FROM productos WHERE ID=?");
        $consulta->execute([$id]);
        $producto=$consulta->fetch(PDO::FETCH_OBJ);
        return ($producto);
    }

    function obtenerProductosPorCat($idcat){
        $consulta=$this->db->prepare("SELECT * FROM productos WHERE id_categoria=?");
        $consulta->execute([$idcat]);
        $productos=$consulta->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
    function insertarProducto($datos,$idcat){
        $consulta=$this->db->prepare("INSERT INTO `productos`(`nombre`, `descripcion`, `marca`, `precio`, `id_categoria`) VALUES (?,?,?,?,?)");
        $consulta->execute([$datos['nombre'],$datos['descripcion'],$datos['marca'],$datos['precio'],$idcat]);
    }
    function eliminarProducto($id){
        $consulta=$this->db->prepare("DELETE FROM `productos` WHERE ID=?");
        $consulta->execute([$id]);
    }
    function modificarProducto($id,$datos,$idcat){
        var_dump($id);
        var_dump($datos);
        var_dump($idcat);
        $consulta=$this->db->prepare("UPDATE productos SET nombre=?,descripcion=?,marca=?,precio=?,id_categoria=? WHERE ID=?");
        $consulta->execute([$datos['nombre'],$datos['descripcion'],$datos['marca'],$datos['precio'],$idcat,$id]);
    }
}