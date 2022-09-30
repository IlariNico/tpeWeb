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
    function obtenerCatProducto($id){
        $consulta=$this->db->prepare("SELECT * FROM categorias WHERE ID=?");
        $consulta->execute([$id]);
        $cat=$consulta->fetch(PDO::FETCH_OBJ);
        return ($cat);
    }
    function obtenerProductosPorCat($idcat){
        $consulta=$this->db->prepare("SELECT * FROM productos WHERE id_categoria=?");
        $consulta->execute([$idcat]);
        $productos=$consulta->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
}