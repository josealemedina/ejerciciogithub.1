<?php
    // variables 
    $kilometros = 0;
    $millas = 0;
    $metros = 0;
    // solicitar datos 
    echo "ingrese la cantidad de kilometros: ";
    // leer datos desde la terminal
    $kilometros = trim(fgets(STDIN));
    // calcular millas y metros
    $millas = 0.621371 * $kilometros;
    $metros = 1000 * $kilometros;
    // mostrar resultados
    echo "la cantidad de millas es: $millas\n";
    echo "la cantidad de metros es: $metros\n";
?>