<?php

    if(empty($_POST['dinero'])||empty($_POST['porcentaje'])){
        return;
    }
    else{
        
        $dinero=$_POST['dinero'];
        $porcentaje=$_POST['porcentaje'];
        echo "<table>";
        for($i=1;$i<=2;$i++){
            echo "<tr>";
            for($j=1;$j<=12;$j++){
                if($i==1){
                    echo "<td>".("mes ".$j)."</td>";
                }
                else{
                    $dinero=$dinero+($dinero*($porcentaje/100));

                    echo "<td>"."dinero ".$dinero."</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }