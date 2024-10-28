<?php
header(header: 'content-type: text/html; charset=utf-8');
function obtenerResultado($qwery){
    $mysqli=new mysqli("localhost" "root" "" "web ejercicios");
    if($mysqli->conect_errno){
       printf("No me puedo conectar");
    }
    if($mysqli->multi_query($qwery)){
        return $mysqli->store_result();
    }
    $mysqli->close();
}    
?>