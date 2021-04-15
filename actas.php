<?php

function promediar($vector){
    $suma = 0;
    $cantidad = 0;
    foreach($vector as $item){
        $suma = $suma + $item; 
        $cantidad ++;
    }
    return $suma / $cantidad;
}

    $aAlumnos = array();
    $aAlumnos[] = array(
                        "nombre" => "Roisbert",
                        "aNotas" => array(1,10),);
    $aAlumnos[] = array(
                        "nombre" => "Roisbert",
                        "aNotas" => array(1,10),);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Actas</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Actas</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover border">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Alumno</th>
                                <th>Nota 1</th>
                                <th>Nota 2</th>
                                <th>Promedio</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $id = 0; 
                        foreach($aAlumnos as $alumno){ ?>
                            <tr>
                                <td><?php echo $id++; ?></td>
                                <td><?php echo $alumno["nombre"];?></td>
                                <td><?php echo $alumno["aNotas"][0]; ?></td>
                                <td><?php echo $alumno["aNotas"][1]; ?></td>
                                <td><?php echo promediar($alumno["aNotas"]);?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>