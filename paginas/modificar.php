<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'productos.php';
$producto = new Productos();

if(isset($_POST['id']) && isset($_POST['codigo']) && isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['cantidad']))
{
    $code = $_POST['codigo'];
    $name = $_POST['nombre'];
    $price = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $id = $_POST['id'];
    
    if($producto->modificar_articulos($code, $name, $price, $cantidad, $id))
        echo "<h2 style='color:blue; padding-top: 20px'>Modificado Correctamente</h2>";
    else
        echo "<h2 style='color:red; padding-top: 20px'>Error al Modificar</h2>";

    echo "<a href='modificar_datos.php'>Volver al Panel de Modificacion</a>";
}
?>
