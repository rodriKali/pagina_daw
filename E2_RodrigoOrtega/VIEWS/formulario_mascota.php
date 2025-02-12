<?php
require_once "../MODEL/model_mascotas.php";
$mascota = new Mascota();
?>


<form method="POST" action="../CONTROL/controller_mascotas.php">
    <label for="id_mascota">ID de la Mascota:</label>
    <input type="number" name="id_mascota" id="id_mascota" required>

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>

    <label for="especie">Especie:</label>
    <input type="text" name="especie" id="especie" required>

    <label for="sexo">Sexo:</label>
    <input type="text" name="sexo" id="sexo" required>

    <label for="id_centro">ID Centro:</label>
    <input type="text" name="id_centro" id="id_centro" required>

    <button type="submit">Insertar Mascota</button>
</form>



