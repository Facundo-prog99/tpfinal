<?php

//conectarme a la BD
require "conexion.php";


$u = $_GET['Tusuario']; 
$p = $_GET['Tcontraseña']; 

//consulta a la base de datos
$c ="select * from usuario where nombre='$u' and password='$p'";

$resultado = mysqli_query($conexion, $c);
if(mysqli_num_rows($resultado) > 0 ) {
//el usuario existe
$valores = mysqli_fetch_array($resultado);
$tipoUsuario = $valores['tipo'];

header("location:iniciointranet.php");
}
else
{
header ("location:login2.html");
//el usuario no existe
}


?>