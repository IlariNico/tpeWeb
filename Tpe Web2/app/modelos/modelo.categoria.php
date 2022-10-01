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

    function insertarCategoria($categoria){
        $consulta=$this->db->prepare("INSERT INTO `categorias`(`nombre`, `descripcion`) VALUES (?,?)");
        $consulta->execute([$categoria['nombre'],$categoria['descripcion']]);
    }

    function obtenerCategoria($id){
        $consulta=$this->db->prepare("SELECT * FROM categorias WHERE ID=?");
        $consulta->execute([$id]);
        $cat=$consulta->fetch(PDO::FETCH_OBJ);
        return ($cat);
    }

    function modificarCategoria ($id,$datos){
        $consulta=$this->db->prepare("UPDATE `categorias` SET `nombre`=?,`descripcion`=? WHERE ID=?");
        $consulta->execute([$datos['nombre'],$datos['descripcion'],$id]);
    }

    function eliminarCategoria($id){
        $consulta=$this->db->prepare("DELETE FROM `categorias` WHERE ID=?");
        try {
            $consulta->execute([$id]);
        } catch (\Throwable $th) {
            
        }
        
    }

    function obtenerCatNombre($nombre){
        $consulta=$this->db->prepare("SELECT 1 FROM categorias WHERE nombre=?");
        $consulta->execute([$nombre]);
        $cat=$consulta->fetch(PDO::FETCH_OBJ);
        return ($cat);
    }


    private function corroborarId($id){
        if (isset($id)&&!empty($id)){
            $p=$this->modelo->obtenerCategoria($id);
            if($p!=NULL){
                return true;
            }
            else 
                return false;
        }
        else
            return false;
    }
}