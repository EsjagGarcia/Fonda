<html>
<head><title>Registrar mascota</title>
<form action="+mascota.php" method="POST">
</head>
<body>
<center>
<table>
<th colspan="2">Registro de mascotas</th>
<tr><td>Nombre de mascota</td><td><input type="text" name="nombre" size="48"></td></tr>
<tr><td>Nomenclatura binominal</td><td><input type="text" name="nombin" size="48"></td></tr>
<tr><td>Peso</td><td><input type="text" name="peso" size="48"></td></tr>
<tr><td>Dimensiones</td><td><textarea cols="50" rows="4" name="tam"></textarea></td></tr>
<tr><td>Descripción</td><td><textarea cols="50" rows="4" name="desc"></textarea></td></tr>
<tr><td>Color/Especies</td><td><textarea cols="50" rows="4" name="color"></textarea></td></tr>
<tr><td>Cuidados</td><td><textarea cols="50" rows="4" name="cuidados"></textarea></td></tr>
<tr><td>Precio</td><td><input type="text" name="precio" size="48"></td></tr>
<tr><td>Disponibilidad</td><td><textarea cols="50" rows="4" name="disp"></textarea></td></tr>
<tr><td>Imagen (debe estar en la misma carpeta, nombre y extensión)</td><td><input type="text" name="img" size="48"></td></tr>
</table>
<input type="submit" name="enviar" value="Registrar">
<br><a href="empleado.html">Volver</a>
</center></body></html>
<?php
$nombre=$_POST['nombre'];
$nombin=$_POST['nombin'];
$peso=$_POST['peso'];
$tam=$_POST['tam'];
$desc=$_POST['desc'];
$color=$_POST['color'];
$cuidados=$_POST['cuidados'];
$precio=$_POST['precio'];
$disp=$_POST['disp'];
$img=$_POST['img'];
$link=mysql_connect("localhost","root","root");
mysql_select_db("formulario",$link);
if($nombre&&$precio)
{
$SQL="insert into `mascotas` (`nombre`,`nombin`,`peso`,`tam`,`desc`,`color`,`cuidados`,`precio`,`disp`,`img`)
values ('$nombre','$nombin','$peso','$tam','$desc','$color','$cuidados','$precio','$disp','$img');";
$resultado=MySQL_query($SQL);
echo"Datos enviados";
}
?>