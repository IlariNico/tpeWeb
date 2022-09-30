<?php

    if(empty($_POST['numero'])||empty($_POST['numero2'])){
        return;
    }
    else{
        
        $numero=$_POST['numero'];
        $segundoTabla=$_POST['numero2'];
        echo "<table>";
        for($i=1;$i<=$segundoTabla;$i++){
            echo "<tr>";
            for($j=1;$j<=$numero;$j++){
                echo "<td>".($i*$j)."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }