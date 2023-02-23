<?php

function getServices() : array {
    
    try {
        // Importar conexion 
        require 'database.php';

        // Consuta DB
        $sql = 'SELECT * FROM salonapp.servicios;';
        $request = mysqli_query($db, $sql);

        // Resultado opcion 1
        // echo '<pre>';
        // var_dump(mysqli_fetch_all($request));
        // echo '</pre>';

        // Resultado opcion 2
        // while ($row = mysqli_fetch_assoc($request)) {
        //     echo '<pre>';
        //     var_dump($row);
        //     echo '</pre>'; 
        // }

        // Resultado opcion 3
        $services = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($request)) {
            $services[$i]['id'] = $row['id'];
            $services[$i]['nombre'] = $row['nombre'];
            $services[$i]['precio'] = $row['precio'];
            $i++;
        }

        // echo '<pre>';
        // var_dump($services);
        // echo '</pre>'; 

        return $services;

        // Captura error
    } catch (\Throwable $th) {
        var_dump($th);
    }
}

getServices();

?>