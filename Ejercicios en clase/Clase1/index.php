<?php
    include "Funciones.php"; 
    require_once "Funciones2.php"; 
    require "/Entidades/Calculadora.php";
    require_once "/Validador/validar.php";
     
    echo "//Realizo la suma";
    echo "</br>";
    sumar(100, 100);
    echo "</br>";
    restar(100, 50);
    echo "</br>";
    Calculadora::Multiplicar(5,5);
    $calculadora = new Calculadora();
    echo "</br>";
    $calculadora->Multiplicar(10,10);
    $validador = new validarPhp();
    echo "</br>";
    echo $validador->EsCero(3);
    echo "</br>";
    Calculadora::Dividir(10,2);
?>