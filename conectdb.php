<?php
header('Content-Type: text/html; charset=utf-8');

function obtenerResultado($query) {
    $mysqli = new mysqli("localhost", "root", "", "web_ejercicios");
    if ($mysqli->connect_errno) {
        printf("No me puedo conectar");
        return null;
    }
    if ($mysqli->multi_query($query)) {
        return $mysqli->store_result();
    }

    $mysqli->close();
    return null;
}
?>