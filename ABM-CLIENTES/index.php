<?php

if (file_exists("archivos.txt")) { // se pregunta si el archivo. txt existe 
    $json_clientes = file_get_contents("archivos.txt"); // se utiliza la función para obtener los tadtos del archivo 
    $aClientes = json_decode($json_clientes, true); // y se conviente en un array para imprimirlo
} else {
    $aClientes = array(); // sino se utiliza el array vacío.
}
$id = isset($_GET["id"]) && $_GET["id"] != "" ? $_GET["id"] : "";


if ($_POST) {
    //si sucede el evento post, las variables tendrán el valor del campo
    $dni = $_POST["txtDni"];
    $nombre = $_POST["txtNombre"];
    $telefono = $_POST["txtTelefono"];
    $correo = $_POST["txtCorreo"];
    //se arma un array que contenga esos valores.

    if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
        $nombre = date("Ymdhmsi") . rand(1000, 5000);
        $archivo_tmp = $_FILES["archivo"]["tmp_name"];
        $nombreArchivo = $_FILES["archivo"]["name"];
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        $nuevoNombre = "$nombre.$extension";
        move_uploaded_file($archivo_tmp, "imagenes/" . $nuevoNombre);
    } else {
        $nuevoNombre = "";
    }
    $msg = "Guardado correctamente";

    if ($id != "") {
        //creo un array con los datos del cliente a editar y se actualiza
        if ($_FILES["archivo"]["error"] !== UPLOAD_ERR_OK) {
            $nuevoNombre = $aClientes[$id]["imagen"];
        } else {
            if (file_exists("imagenes/" . $aClientes[$id]["imagenes"])) {
                unlink("imagenes/" . $aClientes[$id]["imagenes"]);
            }
        }
        $aClientes[$id] = array(
            "dni" => $dni,
            "nombre" => $nombre,
            "telefono" => $telefono,
            "correo" => $correo,
            "imagen" => $nuevoNombre
        );
       
    } else {
        $aClientes[] = array(
            "dni" => $dni,
            "nombre" => $nombre,
            "telefono" => $telefono,
            "correo" => $correo,
            "imagen" => $nuevoNombre
        );
    }


    $json_clientes = json_encode($aClientes); //convierte el array en json y se lo asigna a la variable json_clientes
    file_put_contents("archivos.txt", $json_clientes . ""); // se hace un file put contents para guardar el json en un archivo
}
if (isset($_GET["id"]) && $_GET["id"] != "" && isset($_GET["do"]) && $_GET["do"] == "eliminar") {
    unset($aClientes[$id]);
    $json_clientes = json_encode($aClientes); //convierte el array en json y se lo asigna a la variable json_clientes
    file_put_contents("archivos.txt", $json_clientes);
    $msg = "Eliminado correctamente";



}





?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=tab, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="./css/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>ABM Clientes</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center text-uppercase py-3">
                <h1>abm clientes</h1>
            </div>
            <form action="" method="POST" enctype="multipart/form-data" class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-12">
                                <label for="txtDni">DNI</label>
                                <input type="text" name="txtDni" id="txtDni" class="form-control" required value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["dni"] : ""; ?>">
                            </div>
                            <div class="col-12">
                                <label for="txtNombre">Nombre</label>
                                <input type="text" name="txtNombre" id="txtNombre" class="form-control" value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["nombre"] : ""; ?>">
                            </div>
                            <div class="col-12">
                                <label for="txtTelefono">Teléfono</label>
                                <input type="text" name="txtTelefono" id="txtTelefono" class="form-control" value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["telefono"] : ""; ?>">
                            </div>
                            <div class="col-12">
                                <label for="txtCorreo">Correo</label>
                                <input type="text" name="txtCorreo" id="txtCorreo" class="form-control" value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["correo"] : ""; ?>">
                            </div>
                            <div class="col-12">
                                <label for="Archivo">Archivos</label>
                                <input type="file" name="archivo" id="archivo" class="form-control" multiple accept=".jpeg, .jpg, .pdf, .png">
                            </div>
                            <div class="col-12 pt-3">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-hover border">
                                    <thead>
                                        <tr>
                                            <th>Imagenes</th>
                                            <th>DNI</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($aClientes as $key => $cliente) { ?>
                                            <tr>
                                                <td><img class="img-thumbnail" src="imagenes/<?php echo $cliente["imagen"] ?>" alt=""></td>
                                                <td><?php echo $cliente["dni"]; ?></td>
                                                <td><?php echo $cliente["nombre"]; ?></td>
                                                <td><?php echo $cliente["correo"]; ?></td>
                                                <td class="d-flex">
                                                    <a href="index.php?id=<?php echo $key; ?>&do=editar" type=""><i class="fas fa-edit"></i></a>
                                                    <a href="index.php?id=<?php echo $key; ?>&do=eliminar" type=""><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <?php if (isset($msg) && $msg != "") { ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $msg; ?>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>

</body>

</html>