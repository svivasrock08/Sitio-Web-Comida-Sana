<html>
<head>
</head>

<body>
<div id="main">
<?php
$idplato=$_POST["idplato"];
$nombre=$_POST["nombre"];
$descripcion=$_$_POST["descripcion"];


echo "Edici&oacute;n en proceso ....  </br>";

include_once("PlatoCollector.php");
$PlatoCollectorObj = new DemoCollector();
$PlatoCollectorObj->updatePlato($idplato,$nombre, $descripcion);

echo "id :".$idplato." actualizado a:".$nombre. "Descripcion :".$descripcion. </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
