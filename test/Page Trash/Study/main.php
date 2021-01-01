<?php
    $juan = 2;
    $char = 3;

    $juanmaschar = $juan + $char;

    echo $juanmaschar; 
    
/* ****************************************************************************** */

    // constantes en PHP.

    define("constantephp", 20);

    echo constantephp;

/* ****************************************************************************** */

    // tipos de datos PHP.

    $string = "Caro";
    $int = 1982;

/* ****************************************************************************** */

    // Variables Globales.

    $nombre = "Manuel Felipe";

    function Nombre(){

        global $nombre;
        global $string;

        echo $nombre;
        echo $string;
    }

    Nombre();

/* ****************************************************************************** */

    // Variables dentro de variables.

    $variable = "hola";
    $hola = "hola dentro de otra variable";

    /* Asignamos el valor de una varibale como variable y la llamamos como la variable original con doble signo $ 
    */

    echo $$variable;

/* ****************************************************************************** */

    // Operaciones PHP.

    $num1 = 2;
    $num2 = 3;

    echo "\n\n\n";
    echo "suma \n";
    echo $num1 + $num2;

    $a = 2;
    $b = $a++;
    echo "\n\n\n";
    echo $b;

/* ****************************************************************************** */
    
    // Arreglos PHP.

    $arreglo = array(20, 30, 40, 50);
    echo "\n\n\n\n \t arreglos\n";
    echo $arreglo[1]; // indexar en la posicion 1 out: 30

    /* Podemos asginar claves y el valor para poder indexar por medio de la clave */

    $arreglo_index = array("dato1" => 20, "dato2" => 30);
    echo "\n\n";
    echo $arreglo_index["dato2"]; // mostramos el "dato2" que tendra como clave el numero 20.

/* ****************************************************************************** */

    // Arreglos multidimensionales PHP.

    $arreglo_multi = array(
        "online" => array("yo", "tu"),
        "offline" => array("andres", "david")
    );

    /* Para indexar usamos el estandar [fila]-[colomna] */
    echo "\n\n";
    echo $arreglo_multi["online"][0];




?>