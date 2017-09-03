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

echo "<h3>TEST EMPLEADO.</h3>";
echo "<li>getNombre = ".$empleado->getNombre()."</li>";
echo "<li>getApellido = ".$empleado->getApellido()."</li>";
echo "<li>getDni = ".$empleado->getDni()."</li>";
echo "<li>getSexo = ".$empleado->getSexo()."</li>";
echo "<li>getLegajo = ".$empleado->getLegajo()."</li>";
echo "<li>getSueldo = ".$empleado->getSueldo()."</li>";
echo "<li>ToString = ".$empleado->ToString()."</li>";
echo "<li>Hablar = ".$empleado->Hablar("Español")."</li>";

echo "<h3>TEST FABRICA.</h3>";
echo "<h4>lista completa:</h4>";
echo $fabrica->ToString(); 
$fabrica->EliminarEmpleado($empleado3);
echo "<h4>lista completa luego de borrar al empleado 3:</h4>";
echo $fabrica->ToString(); 
echo "<h4>Cargo de nuevo al empleado 4 y muestro la lista para que ver que no se repita:</h4>";
$fabrica->AgregarEmpleado($empleado4);
echo $fabrica->ToString();
?>