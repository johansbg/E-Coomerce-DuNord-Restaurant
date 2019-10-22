<?php
include("../include/mysql_class.php");
$Usuario=$_POST[username];
$Correo=$_POST[email];
$Clave=$_POST[password];
$Clave=MD5($Clave);
$Nombres=$_POST[firstname];
$Apellidos=$_POST[lastname];
$FechaNacimiento=$_POST[request];
$RecibeOfertas=$_POST[subscription];
$AceptaTerminos=$_POST[terms];
$Genero=$_POST[gender];

// Valida si existe el correo y nombre de usuario
$sql="SELECT `Usuario`,`Correo`
	  FROM `usuario`
	  WHERE `Usuario`= '$Usuario' or `Correo`='$Correo';";
$micon->consulta($sql);
$row=$micon->campoconsultaA();
if($row[Usuario]==""){
	$sql="INSERT INTO `usuario` 
		(
		`Usuario`, 
		`Correo`, 
		`Clave`, 
		`Nombres`, 
		`Apellidos`, 
		`Genero`, 
		`FechaNacimiento`, 
		`RecibeOfertas`, 
		`AceptaTerminos`
		)
		VALUES
		(
		'$Usuario', 
		'$Correo', 
		'$Clave', 
		'$Nombres', 
		'$Apellidos', 
		'$Genero', 
		'$FechaNacimiento', 
		'$RecibeOfertas', 
		'$AceptaTerminos'
		);";
	$micon->consulta($sql);
	header('Location: ../login.php');
}else{
	header('Location: ../register.php?user=1');
}
?>