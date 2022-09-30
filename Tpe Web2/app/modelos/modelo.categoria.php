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
    
    
    
}