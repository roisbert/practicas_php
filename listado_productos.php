<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000
);
$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000
);
$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000
);
   /*<?php echo $aProductos[0]["stock"] > 10 ? "hay stock" : ($aProductos[0]["stock"] <= 10 && $aProductos[0]["stock"] > 0 ? "stock critico" : "no hay"); ?>*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Listado de productos</h1>
            </div>
        </div>
        <div class="col-10 text-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Acción</th>
                    </tr>
                    <tr>
                        <td><?php echo $aProductos[0]["nombre"] ?></td>
                        <td><?php echo $aProductos[0]["marca"] ?></td>
                        <td><?php echo $aProductos[0]["modelo"] ?></td>
                        <td><?php
                            if ($aProductos[0]["stock"] > 10) {
                                echo "hay stock";
                            } elseif ($aProductos[0]["stock"] <= 10 && $aProductos[0]["stock"] > 0) {
                                echo "Stock critico";
                            } else {
                                echo "No hay stock";
                            }
                            ?>
                            echo $aProductos[$i]["stock"] > 10? "hay stock" : ($aProductos[0]["stock"] <= 10 && $aProductos[0]["stock"] > 0)? "stock critico" : "no hay";
                            </td>
                        <td><?php echo $aProductos[0]["precio"] ?></td>
                        <td><button class="btn-primary">Acciones</button></td>
                    </tr>
                    <tr>
                        <td><?php echo $aProductos[1]["nombre"] ?></td>
                        <td><?php echo $aProductos[1]["marca"] ?></td>
                        <td><?php echo $aProductos[1]["modelo"] ?></td>
                        <td><?php
                            if ($aProductos[1]["stock"] > 10) {
                                echo "hay stock";
                            } elseif ($aProductos[1]["stock"] <= 10 && $aProductos[1]["stock"] > 0) {
                                echo "Stock critico";
                            } else {
                                echo "No hay stock";
                            }
                            ?></td>
                        <td><?php echo $aProductos[1]["precio"] ?></td>
                        <td><button class="btn-primary">Acciones</button></td>
                    </tr>
                    <tr>
                        <td><?php echo $aProductos[2]["nombre"] ?></td>
                        <td><?php echo $aProductos[2]["marca"] ?></td>
                        <td><?php echo $aProductos[2]["modelo"] ?></td>
                        <td><?php
                            if ($aProductos[2]["stock"] > 10) {
                                echo "hay stock";
                            } elseif ($aProductos[2]["stock"] <= 10 && $aProductos[2]["stock"] > 0) {
                                echo "Stock critico";
                            } else {
                                echo "No hay stock";
                            }
                            ?></td>
                        <td><?php echo $aProductos[0]["precio"] ?></td>
                        <td><button class="btn-primary">Acciones</button></td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>


</body>

</html>