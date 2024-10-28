<?php
include('conectdb.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["id"])) {
    $id = $_POST["id"];
    
    if ($result = obtenerResultado("SELECT * FROM `animal` WHERE id = '$id'")) {
        while ($fila = $result->fetch_array(MYSQLI_NUM)) {
            echo json_encode($fila);
        }
    }
} else {
    
    echo '
    <form method="POST" action="">
        <label for="id">Ingrese el ID:</label>
        <input type="text" name="id" id="id" required>
        <button type="submit">Consultar</button>
    </form>
    ';
}
?>
