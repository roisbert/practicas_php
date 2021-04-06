<?php

$aPacientes = array();
$aPacientes[] = array(
    "dni" => "30157162",
    "nombre" => "Juan García",
    "edad" => 17,
    "peso" => 50
);

$aPacientes[] = array(
    "dni" => "10010586",
    "nombre" => "Yuleida Bonilla",
    "edad" => 46,
    "peso" => 65
);

$aPacientes[] = array(
    "dni" => "14331333",
    "nombre" => "Jarold García",
    "edad" => 44,
    "peso" => 80
);

$aPacientes[] = array(
    "dni" => "3792749",
    "nombre" => "Carmen Sanchez",
    "edad" => 70,
    "peso" => 55
);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Clínica</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 py-3 text-center">
                <h1>Lista médica</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre y Apellido</th>
                        <th>Edad</th>
                        <th>Peso</th>
                    </tr>
                    <?php foreach ($aPacientes as $paciente) {    ?>
                        <tr>
                            <td><?php echo $paciente["dni"]; ?></td>
                            <td><?php echo $paciente["nombre"]; ?></td>
                            <td><?php echo $paciente["edad"]; ?></td>
                            <td><?php echo $paciente["peso"]; ?></td>
                        </tr>
                    <?php  } ?>
                    <?php for($i = 0; $i < count($aPacientes); $i++) {    ?>
                        <tr>
                            <td><?php echo $aPacientes[$i]["dni"]; ?></td>
                            <td><?php echo $aPacientes[$i]["nombre"]; ?></td>
                            <td><?php echo $aPacientes[$i]["edad"]; ?></td>
                            <td><?php echo $aPacientes[$i]["peso"]; ?></td>
                        </tr>
                    <?php  } ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>