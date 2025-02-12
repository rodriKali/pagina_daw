<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado de la Adopción</h2>
    <p><?php echo htmlspecialchars($_GET["mensaje"]); ?></p>
    <a href="listar_mascotas.php">Volver a lista de mascotas</a>
</body>
</html>