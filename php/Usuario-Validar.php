<?
session_start();
include("../include/mysql_class.php");
$Correo=$_POST[email];
$Clave=$_POST[password];
$Clave=MD5($Clave);
$sql="SELECT `Usuario`, 
            `Correo`, 
            `Clave`, 
            `Nombres`, 
            `Apellidos`, 
            `Genero`, 
            `FechaNacimiento`, 
            `RecibeOfertas`, 
            `AceptaTerminos`,
            `Perfil`
	  FROM `usuario`
	  WHERE `Correo`= '$Correo' and `Clave`='$Clave';";
$micon->consulta($sql);
$row=$micon->campoconsultaA();
if($row[Correo]!=""){
    $_SESSION['Usuario']  = $row[Usuario];
    $_SESSION['Correo'] = $row[Correo];
    $_SESSION['Usuario']  = $row[Usuario];
    $_SESSION['Nombres'] = $row[Nombres];
    $_SESSION['Apellidos']  = $row[Apellidos];
    $_SESSION['Genero'] = $row[Genero];
    $_SESSION['FechaNacimiento'] = $row[FechaNacimiento];
    $_SESSION['Perfil'] = $row[Perfil];
    header('Location: ../index.php');
}else{
    header('Location: ../login.php?Validate=1');
}

?>