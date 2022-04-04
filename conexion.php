<?php
   
    $clave="Rokuro800520649";
    $user = "root";
    $basedts="vetpetsoft";


    try {

        $bd = new PDO( 'mysql:host=localhost; dbname='.$basedts, $user, $clave,
                           array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        echo "Conexion exitosa <br>";

    } catch (Exception $e) {

        echo "Error en conexion a BD <br>";
    }
   

        //https://www.youtube.com/watch?v=IvWqgUtxrt4*/


?>