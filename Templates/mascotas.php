<?php
$link=mysql_connect("localhost","root","root");
mysql_select_db("formulario",$link);
$result=mysql_query("select * from mascotas order by nombre",$link);
echo"<html>
<head>
<title>Menú</title>
</head>
<style>
table#prin td
{
	padding:15px;
}
ul#boton
{
	text-align:left;
	list-style-type:none;
}
ul#boton li
{
	display:inline;
}
ul#boton li a
{
	text-decoration:none;
	background-color:f5f5f5;
	padding: 10px 10px;
}
ul#boton li a:hover
{
	background-color:E0E0E0;
}
</style>
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
echo"<td><i><font size=2 face=arial>".$renglon['nombin']."</font></i></td>";
echo"<td rowspan=3><font size=2 face=arial>".$renglon['desc']."</font></td>";
echo"<td rowspan=3><font size=2 face=arial>".$renglon['cuidados']."</font></td>";
echo"<td rowspan=3><font size=2 face=arial>".$renglon['color']."</font></td>";
echo"<td rowspan=3><font size=2 face=arial>".$renglon['disp']."</font></td>";
echo"<td rowspan=3><img src=".$renglon['img']." alt=ejemplo></td></tr>";
echo"<tr><td><font size=2 face=arial>Peso: ".$renglon['peso']."</font></td>";
echo"<td><font size=2 face=arial>Dimensiones: ".$renglon['tam']."</font></td></tr>";
echo"<tr><td colspan=2><font size=2 face=arial><b>Precio: </b><i>".$renglon['precio']."</i></font></td></tr></table>";
}
?>