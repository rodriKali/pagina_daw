<?php
require_once "../MODEL/model_mascotas.php";

$mascota = new Mascota();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $consulta = $_POST["consulta"];
    $resultado = "";

    if ($consulta == "num_perros_gatos") {
        $resultado = $mascota->contarPerrosYGatos();
    } elseif ($consulta == "localidades_centros") {
        $resultado = implode(", ", $mascota->obtenerLocalidadesCentros());
    } elseif ($consulta == "nombres_especies") {
        $mascotas = $mascota->obtenerNombresYEspecies();
        $resultado = "Nombre: " . $mascota['nombre'] . ", Especie: " . $mascota['especie'] . "<br>";
        
    }

    header("Location: ../VIEWS/listar_mascotas.php?resultado=" . urlencode($resultado));
    exit();
}
?>
