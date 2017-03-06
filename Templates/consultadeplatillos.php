<?php
$link=mysql_connect("localhost","root","opciones");
mysql_select_db("formulario",$link);
$result=mysql_query("select * from mascotas order by nombre",$link);
echo"<html>
<head>
<title>Menú</title>
</head>
<body>
<p><ul id=boton>
<li><a href=paginaprin.html><font size=4 face=arial color=black>Página Principal</font></a></li>
</ul>
<center>
<table width=100% id=prin>
<th colspan=3 style=background:#f5f5f5;><font size=6 face=arial>Mascotas</font></th>";
while($renglon=mysql_fetch_array($result))
{
echo"<tr>";
echo"<td><table width=100%><th style=background:#f5f5f5; colspan=7>".$renglon['nombre']."</th>";
echo"<tr><td><b><font size=2 face=arial>".$renglon['nombre']."</font></b></td>";
echo"<td><i><font size=2 face=arial>".$renglon['precio']."</font></i></td>";
echo"<td><i><font size=2 face=arial>".$renglon['porciones']."</font></i></td>";
echo"<td rowspan=3><font size=2 face=arial>".$renglon['desc']."</font></td>";
}
?>
