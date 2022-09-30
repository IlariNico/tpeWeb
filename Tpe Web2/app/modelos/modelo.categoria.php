<?php

class modeloCategoria{
    
    private $db;
    
    public function __construct(){
        $this->db=new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function obtenerCategorias(){
        $consulta= $this->db->prepare("SELECT * FROM categorias ");
        $consulta->execute();
        $categorias=$consulta->fetchAll(PDO::FETCH_OBJ);
        return ($categorias);
    }
    
    function existeCat($nombrecat){
        $consulta= $this->db->prepare("SELECT * FROM categorias WHERE nombre=?");
        $consulta->execute([$nombrecat]);
        $categoria=$consulta->fetch(PDO::FETCH_OBJ);
        if($categoria!=NULL)
        return($categoria->ID);
    }

    function obtenerCategoria($id){
        $consulta=$this->db->prepare("SELECT * FROM categorias WHERE ID=?");
        $consulta->execute([$id]);
        $cat=$consulta->fetch(PDO::FETCH_OBJ);
        return ($cat);
    }
    
}