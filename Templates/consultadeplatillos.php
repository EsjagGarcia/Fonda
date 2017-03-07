<?php
$link=mysql_connect("localhost","root","root");
mysql_select_db("formulario",$link);
$result=mysql_query("select * from menu order by tipo",$link);
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
<th colspan=3 style=background:#f5f5f5;><font size=6 face=arial>Men򼯦ont></th>";
while($renglon=mysql_fetch_array($result))
{
echo"<tr><td style=background:#f5f5f5;><font size=3 face=arial>".$renglon['tipo']."</font></td>";
echo"<td style=background:#f5f5f5;><b><font size=2 face=arial>Precio</font></b></td>";
echo"<td style=background:#f5f5f5;><b><font size=2 face=arial>Porciones</font></b></td></tr>";
echo"<tr><td><b><font size=2 face=arial>".$renglon['nombre']."</font></b></td>";
echo"<td><i><font size=2 face=arial>$".$renglon['precio']."</font></i></td>";
echo"<td><i><font size=2 face=arial>".$renglon['porciones']."</font></i></td></tr>";
echo"<tr><td><font size=2 face=arial>".$renglon['desc']."</font></td></tr>";
}
?>
