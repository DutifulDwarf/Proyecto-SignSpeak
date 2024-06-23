<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo de Desarrolladores</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
        }
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            text-align: center;
            margin: 20px;
        }
        .card img {
            width: 100%;
            height: auto;
        }
        .card-body {
            padding: 15px;
        }
        .card-title {
            font-size: 1.5em;
            margin: 0;
        }
        .card-text {
            color: #333;
            margin: 10px 0;
        }
    </style>
</head>
<body>

<?php
$team = [
    [
        'name' => 'Mauricio Ismael Calvario Espinosa',
        'role' => 'Desarrollador Backend',
        'image' => 'images/juan.jpg',
        'ideal' => 'Crear soluciones eficientes y escalables.'
    ],
    [
        'name' => 'Gabriela Amaro Flores',
        'role' => 'Desarrolladora Frontend',
        'image' => 'images/maria.jpg',
        'ideal' => 'Diseñar interfaces amigables e intuitivas.'
    ],
    [
        'name' => 'Aldo Ulises Gutierrez Espinoza',
        'role' => 'Diseñador UX/UI',
        'image' => 'images/carlos.jpg',
        'ideal' => 'Optimizar la experiencia del usuario.'
    ]
];

foreach ($team as $member) {
    echo "
    <div class='card'>
        <img src='{$member['image']}' alt='{$member['name']}'>
        <div class='card-body'>
            <h3 class='card-title'>{$member['name']}</h3>
            <p class='card-text'>{$member['role']}</p>
            <p class='card-text'>{$member['ideal']}</p>
        </div>
    </div>
    ";
}
?>

</body>
</html>
