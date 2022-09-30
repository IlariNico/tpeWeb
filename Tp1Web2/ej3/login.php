<?php
    
    if(empty($_POST["nombre"])||empty($_POST["apellido"])||empty($_POST["edad"])){
        return ;
    }
    else{
        echo "<p>".$nombreUsuario." ".$apellidoUsuario." ".$edadUsuario."</p>";
    }
    