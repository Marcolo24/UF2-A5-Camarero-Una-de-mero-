<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="./style.css">
    
</head>

<body>
<div id="principal">
    <div id="primera">
<?php
            if (file_exists('./joebiden.xml')) {
                $platos = simplexml_load_file('./joebiden.xml');
                foreach ($platos->comida as $comida) {
                    echo "<strong>" . $comida['nombre'] . "<br>";
                    echo "Precio: " . $comida['precio'] . "<br>";
                    echo " " . $comida['descripcion'] . "<br>";
                    echo "Estimado de calorías: " . $comida['calorias'] . "<br>";
                    echo "<br>";
                }
            } else {
                exit('Servicio de mantenimiento.');
            }
?>
    </div>
    <div id="segunda">
        <?php
            if (file_exists('./joebiden.xml')) {
                $platos = simplexml_load_file('./joebiden.xml');
                foreach ($platos->postre as $postre) {
                    echo "<strong>" . $postre['nombre'] . "<br>";
                    echo "Precio: " . $postre['precio'] . "<br>";
                    echo " " . $postre['descripcion'] . "<br>";
                    echo "Estimado de calorías: " . $postre['calorias'] . "<br>";
                    echo "<br>";
                }
            } else {
                exit('Servicio de mantenimiento.');
            }
?>
    </div>
    
</div>
</body>

</html>