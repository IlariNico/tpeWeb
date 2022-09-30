<?php
//require_once "./templates/header.php";
class commentView{
    function showComments($comments){
        require_once "./templates/header.php";
        foreach($comments as $comment){
            echo "<h1> Nombre $comment->nombreusuario </h1>
            <h2> $comment->comentario </h2>
            <a href='delete/$comment->ID'>Borrar </a>";
        }
    }
}