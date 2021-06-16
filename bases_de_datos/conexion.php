<?php

function Conect()
{
    //$echo = mysqli_connect("172.31.25.36","dexcontae","78j&FU0uj**#k","dexcondigital_noticias_inmueble");
    //return $echo;
    try {
        $echo2 = new PDO('mysql:host=localhost;port=3306;dbname=dexcondigital_noticias_inmueble;', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES utf8"));
        $echo2->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $echo2->exec("set names utf8");
        return $echo2;

    } catch ( Exception $e ) {
        die( 'Error:' . $e->getMessage() );
    }
}

?>