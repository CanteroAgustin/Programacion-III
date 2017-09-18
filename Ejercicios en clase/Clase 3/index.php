<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <LINK REL="stylesheet" TYPE="text/css" href="css/estilos.css">
    <title>Document</title>
</head>
<body>
<h1>Estacionamiento</h1>
<div id="estacionados"><?php include( 'TablaEstacionados.php' ); ?></div>
<div id="facturados"><?php include( 'TablaFacturados.php' ); ?></div>
<form action="GestionHTTP.php" id="vehiculos" method="POST" ENCTYPE="multipart/form-data">
    <label for="patente">Patente:</label>
    <input type="text" id="patente" name="patente">
    <button type="submit" name="accion" value="guardar">Guardar</button>
    <button type="submit" name="accion" value="sacar">Sacar</button>
</form>
<!--
<div id="input">
    <label for="patente">Patente:</label>
    <input type="text" id="patente">
</div>
<div id="botones">
    <button>Guardar</button>
    <button>Sacar</button>
</div>
-->
</body>
</html>
