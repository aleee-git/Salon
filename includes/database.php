<?php 

// Conexion de base de datos
$db = mysqli_connect('localhost', 'root', 'Blueberry8!', 'salonapp');

// Comprobar que la base exista/este llena y confirmar conexion 
if (!$db) {
    echo 'Connection Failed :(';
    exit;
} 

// echo 'Successful Connection :)';

?>