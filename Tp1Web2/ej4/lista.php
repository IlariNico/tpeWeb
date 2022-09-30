<?php
  
    $cantListas=$_GET["variable"];
    
    echo "<ul>";
    for($i=1;$i<=$cantListas;$i++){
        echo "<li>"." item ".$i."</li>";
    }
    
    echo "</ul>";
    