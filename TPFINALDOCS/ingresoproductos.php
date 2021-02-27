<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Productos</title>
    <div>
    <link rel="stylesheet" type="text/css" href="css/masterprod.css">
</div>

</head>
<body onload="limpiar();">
        <div class="login-box">
    <form method='GET' action='grabar_productos.php'>
        <label >Informacion del producto </label><br>
        <input type='text' name='t_producto' id = "t_producto" maxlength="100" max="100" required><br>
        <label>Fecha de ingreso </label><br>
        <input type='date' name='t_fecha' id = "t_fecha" required><br>
        <label>Precio </label><br>
        <input type='number' name='t_precio' min=1 decimal=2 required><br>
        <label>Tipo de Producto</label><br>
        <select name='t_estado'>
            <option value='N'>Nuevo</option> 
            <option value='U'>Usado</option> 
            
        </select><br>
        <input type="submit">
       
        

    </form>

    <a href="iniciointranet.php"> Regresar </a>


</div>


    


<script>

function limpiar(){

    var d = document.getElementById("t_descripcion");
    var a = document.getElementById('t_año');
    var p = document.getElementById('t_precio');
    

    d.value = "";
    a.value = "";
    p.value = "";
    

}



</script>

</body>
</html>