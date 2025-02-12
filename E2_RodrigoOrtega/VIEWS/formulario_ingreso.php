<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Mascota</title>
</head>
<body>
    <h2>GESTIÓN DE ACOGIDA DE MASCOTAS - CyL</h2>
    
    <form action="../CONTROL/controller_mascotas.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        
        <label for="especie">Especie:</label>
        <select id="especie" name="especie" required>
            <option value="" disabled selected>Selecciona una especie</option>
            <option value="P">Perro</option>
            <option value="G">Gato</option>
        </select>
        <br>
        
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="" disabled selected>Selecciona un sexo</option>
            <option value="M">Macho</option>
            <option value="H">Hembra</option>
        </select>
        <br>

        <button type="submit">Ingresar Mascota</button>
    </form>
</body>
</html>
