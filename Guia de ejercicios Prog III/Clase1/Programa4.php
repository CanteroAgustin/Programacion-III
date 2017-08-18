<!--Aplicación Nº 4 (Calculadora)  
Escribir un programa que use la variable $operador que pueda almacenar los símbolos matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; 
y definir dos variables enteras $op1 y $op2 . 
De acuerdo al símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el resultado por pantalla. -->

<?php
    $operador = "u";
    $opt1 = 2;
    $opt2 = 3;

    echo "</br>"."<font color='blue'><==Comienzo del Programa4==></font>"."</br>";   
    switch($operador){
        case "+":
                echo ($opt1."+".$opt2." = ".($opt1+$opt2));
            break;
        case "-":
                echo ($opt1."-".$opt2." = ".($opt1-$opt2));
            break;
        case "*":
                echo ($opt1."*".$opt2." = ".($opt1*$opt2));
            break;
        case "/":
                echo ($opt1."/".$opt2." = ".($opt1/$opt2));
            break;
        default:
                echo ("El operador ingresado es incorrecto"."</br>");
            break;  
    }
    echo "<font color='blue'><==Fin del Programa4==></font>"."</br>";
    echo ("</br");
?>