<?php

$contraseña = "6TO9nocX2nAou9yX11P5";
$usuario = "postgres";
$nombreBaseDeDatos = "railway";

$rutaServidor = "
containers-us-west-23.railway.app";
$puerto = "6833";

try{

    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}

?>