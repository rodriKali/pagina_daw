<?php
require_once "../MODEL/model_mascotas.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idMascota = $_POST["id_mascota"];

    $mascota = new Mascota();
    $resultado = $mascota->actualizarEstadoMascota($idMascota);

    header("Location: ../VIEWS/mensaje_exito.php?mensaje=" . urlencode($resultado));
    exit();
}
?>
