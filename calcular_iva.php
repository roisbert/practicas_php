<?php
$ivaIni = 0;
$resPrecioConIva = 0;
$resPrecioSinIva = 0;
$resIvaCantidad = 0;


if ($_POST) {
    $iva = $_REQUEST["lstIva"];
    $precioSinIva = $_REQUEST["txtImporteSinIva"];
    $precioConIva = $_REQUEST["txtImporteConIva"];


    if (isset($precioSinIva) && $precioSinIva > 0 && $precioConIva == "") {
        $resPrecioConIva = $precioSinIva * ($iva / 100 +1);
        $resPrecioSinIva = $precioSinIva;
        $ivaIni = $iva;
        $resIvaCantidad = $resPrecioConIva - $resPrecioSinIva;
        }

    if (isset($precioConIva) && $precioConIva > 0 && $precioSinIva == "") {
   
        $resPrecioConIva = $precioConIva ;
        $resPrecioSinIva = $precioConIva / ($iva / 100 +1);
        $ivaIni = $iva;
        $resIvaCantidad = $resPrecioConIva - $resPrecioSinIva;
    } 
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Iva</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-uppercase">
                <H1>calculadora de iva</H1>
            </div>
        </div>
        <form action="" method="POST">
            <div class="row py-5">
                <div class="col-5">
                    <div class="col-12">
                        <label for="lstIva">Iva</label>
                        <select name="lstIva" id="lstIva">
                            <option value="21">21</option>
                            <option value="10.5">10.5</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="txtImporteSinIva">Precio sin iva</label>
                        <input type="text" name="txtImporteSinIva" id="txtImporteSinIva">
                    </div>
                    <div class="col-12">
                        <label for="txtImporteConIva">Precio con iva</label>
                        <input type="text" name="txtImporteConIva" id="txtImporteConIva">
                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary">Calcular</button>
                    </div>

                </div>
                <div class="col-4">
                <table class="table table-hover border">
                    <tr>
                        <th>Iva</th>
                        <td><?php echo $ivaIni ?></td>

                    </tr>
                    <tr>
                        <th>Precio sin iva</th>
                        <td><?php echo $resPrecioSinIva ?></td>

                    </tr>
                    <tr>
                        <th>Precio con iva</th>
                        <td><?php echo $resPrecioConIva ?></td>

                    </tr>
                    <tr>
                        <th>Iva Cantidad</th>
                        <td><?php echo $resIvaCantidad ?></td>

                    </tr>
                </table>
            </div>
            </div>
    </div>


    </form>
    </div>
</body>

</html>