<?php

class commentModel{
    private $db;

    function __construct(){
        $this->db=new PDO('mysql:host=localhost;'.'dbname=db_comments;charset=utf8', 'root', '');
    }

    function getComments(){
        $query=$this->db->prepare("SELECT * FROM comments");
        $query->execute();
        $comments=$query->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }

    function deleteComment($id){
        $query=$this->db->prepare("DELETE FROM comments WHERE ID=?");
        $query->execute([$id]);
    }
}