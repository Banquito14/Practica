<?php

$contraseña = "contraseña_de_la_base_de_datos";
$usuario = "usuario_de_la_base_de_datos";
$nombreBaseDeDatos = "nombre_de_la_base_de_datos";

$rutaServidor = "host_de_la_base_de_datos";
$puerto = "puerto_de_la_base_de_datos";

try{

    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch(Exception $e){
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}

?>