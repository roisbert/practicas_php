<?php 
    $fecha = date("d/m/Y");
    $edad = 20;
    $nombre = "Roisbert Almenara";
    $aPeliculas = array("Interestelar",
                        "El efecto mariposa",
                        "Son como niños.");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=tab, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Ficha médica</h1>
            </div>
            <div class="col-12">
            <table class="table table-hover">
        <tr>
            <th>fecha</th>
            <td><?php echo $fecha; ?></td>
        </tr>
        <tr>
            <th>Nombre y apellido</th>
            <td><?php echo $nombre; ?></td>
        </tr>
        <tr>
            <th>Edad</th>
            <td><?php echo $edad; ?></td>
        </tr>
        <tr>
            <th>Películas Favoritas</th>
            <td><?php
                    for($i = 0; $i < count($aPeliculas); $i++){
                        echo $aPeliculas[$i] . "<br>";
                    }
                    foreach($aPeliculas as $item){
                        echo $item . "<br>";
                    }
                    
                ?>
            </td>
        </tr>
    </table>
            </div>
        </div>
    </div>
</body>

</html>