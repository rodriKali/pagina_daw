<?php
require_once "../MODEL/model_mascotas.php";

$mascota = new Mascota();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascotas Disponibles para Adopción</title>
</head>
<body>
    <style>
       body{
        display: flex;
        flex-direction: column;
        border: 2px solid black;
        padding: 20px;
       }
       
       button{
        margin: 6px;
       }
       #salir{
        width: 40px;
       }    
       #botones{
        display: flex;
       }
       #botones form{
        border: 1px solid black;
        padding: 20px;
       }
    </style>
    <h2>GESTION DE ACOGIDA DE MASCOSTAS</h2>
    
    <div id="botones">
    <form action="../VIEWS/formulario_mascota.php" method="get">
        <button type="submit">Insertar Mascota</button>
    </form>
    <br>
    
    <form action="../VIEWS/formulario_mascota2.php" method="get">
        <button type="submit">Acoger Mascota</button>
    </form>
    </div>
    <hr>

    <h2>Posibles Consultas</h2>
    <form action="../CONTROL/controller_consultas.php" method="POST">
        <select name="consulta">
            <option value="num_perros_gatos">Número de perros y gatos</option>
            <option value="nombre_y_especies">Nombre y especie de todas las mascotas registradas</option>
            <option value="localidades_centros">Localidades con centros de acogida</option>
        </select>
        <button type="submit">Seguir</button>
        <button id="salir">Salir</button>
    </form>

    

    <div id="resultado">
    <?php
    if (isset($_GET['resultado'])) {
        $resultado = urldecode($_GET['resultado']);
        echo $resultado;
    }

?>

    </div>
</body>
</html>
