<?php
include_once "Persona.php";
include_once "Empleado.php";
include_once "Fabrica.php";

$empleado = new Empleado("Agustin","Cantero",32124153,'M',1001,5200.25);
$empleado2 = new Empleado("Esteban","Martino",27253123,'M',1002,5400.5);
$empleado3 = new Empleado("Mariano","Corbata",35254825,'M',1003,3700.25);
$empleado4 = new Empleado("Dario","Sobrero",25435836,'M',1004,4800);
$empleado5 = new Empleado("Alan","Fierro",32345956,'M',1005,5100);
$fabrica = new Fabrica("La Fabrica S.A.");
$fabrica->AgregarEmpleado($empleado);
$fabrica->AgregarEmpleado($empleado2);
$fabrica->AgregarEmpleado($empleado3);
$fabrica->AgregarEmpleado($empleado4);
$fabrica->AgregarEmpleado($empleado5);

echo "TEST EMPLEADO.";
var_dump($empleado->getNombre());
var_dump($empleado->getApellido());
var_dump($empleado->getDni());
var_dump($empleado->getSexo());
var_dump($empleado->getLegajo());
var_dump($empleado->getSueldo());
var_dump($empleado->ToString());
var_dump($empleado->Hablar("Español"));

echo "TEST FABRICA.";
echo "</br>";
echo "</br>//lista completa";
var_dump($fabrica->ToString()); 
$fabrica->EliminarEmpleado($empleado3);
echo "//lista completa luego de borrar al empleado 3";
var_dump($fabrica->ToString()); 
echo "//Cargo de nuevo al empleado 4 y muestro la lista para que ver que no se repita";
$fabrica->AgregarEmpleado($empleado4);
var_dump($fabrica->ToString());
?>