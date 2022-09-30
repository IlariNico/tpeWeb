<?php

class productView{


    function showHome(){
        echo "hola q tal";
    }

    function showProducts($products){
        
        echo "<ul>";
        foreach($products as $product){
            echo "<li>
            <a href='list/$product->ID'>
            $product->nombre
            </a>
            </li>";
        }
        
        echo "</ul>";
    }

    function showProduct($product){
        echo "<h1> Nombre: $product->nombre Descripcion: $product->descripcion Precio: $product->precio </h1>";
    }
}