<?php
    if(empty($_POST['peso'])||empty($_POST['altura'])){
        return;
    }
    else{
        $peso=$_POST['peso'];
        $altura=$_POST['altura'];
        $imc=$peso/($altura*$altura);
        $estado;
        if($imc<18.5){
            $estado=" bajo peso";
        }
        elseif(($imc>18.5)&&($imc<25)){
            $estado=" normal peso";
        }
        elseif(($imc>=25)&&($imc<30)){
            $estado=" sobre peso";
        }
        elseif(($imc>30)){
            $estado=" obesidad ";
        }
        echo ("<p> usted posee".$estado);
    }