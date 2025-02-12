<?php

function validarDatosMascota($id_mascota, $nombre, $especie, $sexo, $id_centro, $estado) {
    if (empty($id_mascota) || !is_string($id_mascota)) {
        return false;
    }

    if (empty($nombre) || !is_string($nombre)) {
        return false;
    }

    if ($especie !== "P" && $especie !== "G") {
        return false;
    }

    if ($sexo !== "M" && $sexo !== "H") {
        return false;
    }

    if (empty($id_centro) || !is_numeric($id_centro)) {
        return false;
    }

    if ($estado !== "A" && $estado !== "B") {
        return false;
    }

    return true;
}
?>
