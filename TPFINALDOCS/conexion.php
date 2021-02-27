<?php
//conexion a la base de datos
$dbip="localhost";
$dbu="root";
$dbp="";
$dbnombre="tpfinal";
$conexion= mysqli_connect($dbip, $dbu, $dbp, $dbnombre);

if(mysqli_connect_errno()){
    echo "Error de conexion";
}
?>