<?php
    // Rama test
    include('conectdb.php');
    $id=$_GET["id"];
    if($result=obtenerResultado("SELECT * FROM  `anaimal` where id = '$id'")){
        while($fila=$result->fetch_array(mode: MYSQLI_NUM))
        {
            echo json_encode(value: $fila);
        }
    }
?>    