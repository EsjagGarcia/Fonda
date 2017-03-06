<?php
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$credit=$_POST['tarcre'];
	$contra=$_POST['contra'];
	$sena=$_POST['sena'];


	if($contra==$sena)
	{
		$link=MySQLi_connect("localhost","usuario mysql","contraseña","base de datos");
		$SQL="insert into `Usuarios`(`USUARIO_NOMBRE`,`CORREO_ELECTRONICO`,`TARJETA_CREDITO`,`USUARIO_CONTRASEÑA`)
		values ('$nombre','$correo','$credit','$contra');";
		$resultado=MySQL_query($SQL,$link);
		header('location:main.html');
		echo "Listo!";
	}
	else
	{
		header('location:main.html');
		echo "Hubo un error, vuelve a intentarlo";
	}
?>