<?php

    if(empty($_POST['numero'])){
        return;
    }
    else{
        
        $numero=$_POST['numero'];
        echo "<table>";
        $valorTabla=1;
        for($i=1;$i<10;$i++){
            echo "<tr>";
            for($j=1;$j<=$numero){
                echo "<td>".$i*$j."</td>";
            }
            echo "</tr>"
        }
        echo "</table>";
    }