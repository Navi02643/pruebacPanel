<?php

function hasInternetConnection()
{
    $host = 'www.google.com';
    $port = 80;
    $timeout = 5; // Tiempo de espera en segundos

    $file = @fsockopen($host, $port, $errno, $errstr, $timeout);
    if ($file) {
        fclose($file);
        return true; // Hay conexión a Internet
    } else {
        return false; // No hay conexión a Internet
    }
}

$data = [
    "name" => $_POST['nombre'],
    "password" => password_hash($_POST['password'], PASSWORD_DEFAULT)
];

if (hasInternetConnection()) {
    // Guardar los datos en la base de datos
    // Código para guardar en la base de datos
    echo "Los datos se han guardado en la base de datos.";
} else {
    // Guardar los datos localmente en el archivo JSON
    $archivoJson = 'datos.json';

    // Leer el contenido actual del archivo JSON y convertirlo en un array
    $jsonActual = file_get_contents($archivoJson);
    $datosActuales = json_decode($jsonActual, true);

    // Agregar los nuevos datos al array
    $datosActuales[] = $data;

    // Convertir el array actualizado a formato JSON
    $jsonData = json_encode($datosActuales);

    // Escribir el contenido JSON actualizado de vuelta al archivo
    $archivo = fopen($archivoJson, "w");
    if ($archivo) {
        fwrite($archivo, $jsonData);
        fclose($archivo);
        echo "Los datos se han guardado localmente en el archivo JSON.";
    } else {
        echo "No se pudo abrir el archivo JSON.";
    }
}
