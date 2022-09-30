<?php

class productModel{

    private $db;

    public function __construct(){
        $this->db=new PDO('mysql:host=localhost;'.'dbname=db_articuloslimpieza;charset=utf8', 'root', '');
    }

    function getProducts(){
        $query=$this->db->prepare("SELECT * FROM productos");
        $query->execute();
        $products=$query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function getProduct($id){
        $query=$this->db->prepare("SELECT * FROM productos WHERE ID=?");
        $query->execute([$id]);
        $product=$query->fetch(PDO::FETCH_OBJ);
        return $product;
    }
}