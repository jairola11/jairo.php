<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parqueadero  Aguacate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        
        h1 {
            text-align: center;
            margin: 30px 0;
            color: #333;
        }
        
        .menu {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 40px;
        }
        
        .column {
            flex: 1;
            text-align: center;
            padding: 20px;
            margin: 10px;
            background-color: #fff;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        
        .column a {
            display: block;
            margin: 10px;
            padding: 12px 24px;
            text-align: center;
            text-decoration: none;
            color: #333;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: background-color 0.3s, color 0.3s; /* Agregado para transiciones de color */
        }
        
        .column a:hover {
            background-color: #007bff; /* Nuevo color de fondo */
            color: white; /* Nuevo color de texto */
        }
    </style>
</head>
<body>
    <h1>Parqueadero  Aguacate</h1>
    
    <div class="menu">
        <div class="column">
            <a href="buscar_cliente.php">Buscar Cliente</a>
            <a href="registrar_cliente.php">Nuevo Usuario</a>
        </div>
        
        <div class="column">
            <a href="buscar_auto.php">Buscar Auto</a>
            <a href="registrar_auto.php">Registrar Auto</a>
        </div>
        
        <div class="column">
            <a href="puestos_disponibles.php">Puestos Disponibles</a>
            <a href="parquear.php">Nuevo Puesto</a>
        </div>
    </div>
</body>
</html>
