<html>
<head><title>Agregar platillos</title>
<form action="agregarplatillos.php" method="POST">
</head>
<body>
<center>
<table>
<th colspan="2">Agregar platillos</th>
<tr><td>Nombre</td><td><input type="text" name="nombre" size="48"></td></tr>
<tr><td>Precio</td><td><input type="text" name="precio" size="48"></td></tr>
<tr><td>Porciones?</td><td><input type="text" name="porciones" size="48"></td></tr>
<tr><td>Descripción</td><td><textarea cols="50" rows="4" name="desc"></textarea></td></tr>
</table>
<input type="submit" name="enviar" value="Registrar">
<br><a href="empleado.html">Volver</a>
</center></body></html>
<?php
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$porciones=$_POST['porciones'];
$desc=$_POST['desc'];
$link=mysql_connect("localhost","root","opciones");
mysql_select_db("formulario",$link);
if($nombre&&$precio)
{
$SQL="insert into `mascotas` (`nombre`,`precio`,`porciones`,`desc`)
values ('$nombre','$precio','$porciones','$desc');";
$resultado=MySQL_query($SQL);
echo"Datos enviados";
}
?>
