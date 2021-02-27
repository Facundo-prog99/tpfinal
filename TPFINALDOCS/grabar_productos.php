<?php
//recibir los datos del cliente

 $d = $_GET['t_producto'];
 $f = $_GET['t_fecha'];
 $p = $_GET['t_precio'];
 $e = $_GET['t_estado'];
 

 //conectarme
 require "conexion.php" ;

 //armo el conado sql
 $c = "insert into productos (producto, fecha, precio, estado) values('$d', '$f', $p, '$e') ";
 
 
 //ejecuto el comnando sql, si la operacion es exitosa devuelve true
 $resultado = mysqli_query($conexion, $c);
 
 
 if($resultado){
            //comando sql exitoso
            echo "<script> alert('producto agregado exitosamente'); </script>";
            //header("location:ingresoproductos.php");
 }
 else
 {
    //hubo algun error}
    echo "<script> alert('Error al agregar los datos'); </script>";

 }




?>