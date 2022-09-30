<?php

function abrirDb(){
    $db=new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    return $db;
}

 function obtenerCategorias(){
    $db=abrirDb();
    $query=$db->prepare("SELECT * FROM categorias");
    $query->execute();
    $categorias=$query->fetchAll(PDO::FETCH_OBJ);
    return $categorias;
}

function mostrarTabla($categorias){
    echo "<ul>";
    foreach($categorias as $categoria){
        echo "<li>".$categoria->nombre."</li>";
    }
    echo "<ul>";
}



function showHome(){
    require_once "templates/header.php";
    ?>
    <form action = "add" method = "POST" >
        <label> Nombre : </label > <br> <input type = " text " name = "nombre" required = " " > <br> <br>
        <button type = " submit " name = " enviar ">guardar</button>
    </form >
    <?php
    
    
}

function guardar(){
    $db=abrirDb();
    $nombre=$_POST['nombre'];
    $consulta=$db->prepare("INSERT INTO categorias (nombre) VALUES (?)");
    $consulta->execute([$nombre]);
    header("Location: " . BASE_URL); 
}

function insertarCategoria(){
    $db=abrirDb();
    $query=$db->prepare("INSERT INTO categorias (nombre) VALUES ('categoria prueba')");
    $query->execute();
    
}