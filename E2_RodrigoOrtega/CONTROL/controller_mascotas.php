<?php
require_once "../MODEL/model_mascotas.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_mascota = $_POST["id_mascota"];
    $nombre = $_POST["nombre"];
    $especie = $_POST["especie"];
    $sexo = $_POST["sexo"];
    $id_centro = $_POST["id_centro"];

    if ($id_mascota === '') {
        $id_mascota = null; 
    } elseif (!is_numeric($id_mascota)) {
        die("El ID de la mascota debe ser un número.");
    }

    $mascota = new Mascota();
    $resultado = $mascota->insertarMascota($id_mascota, $nombre, $especie, $sexo, $id_centro);

    header("Location: ../VIEWS/mensaje_exito.php?mensaje=" . urlencode($resultado));
    exit();
}
?>
