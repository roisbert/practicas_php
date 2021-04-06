<?php


if ($_POST) {
    $usuario = $_POST["txtUsuario"];
    $clave = $_POST["txtClave"];
    if (isset($usuario) && $usuario != "" && $clave != "") {
        header("Location:acceso-confirmado.php");
    }else {
        $msg = "Valido solo para usuarios registrados";
    }
}



?>


<!DOCTYPE html>
<html lang="es">

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
            <form action="" method="POST">
                <div class="col-12 pt-4">
                    <H1 class="text-center text-uppercase">formulario</H1>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-8 offset-2 form-group">
                            <label for="txtUsuario" class="form-label">Usuario</label>
                            <input type="text" name="txtUsuario" id="txtUsuario" class="form-control">
                        </div>
                        <div class="col-8 offset-2 form-group">
                            <label for="txtClave" class="form-label">Clave</label>
                            <input type="password" name="txtClave" id="txtClave" class="form-control">
                        </div>
                        <div class="col-12 text-center py-3">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                        <?php if(isset($msg) && $msg != "") { ?>
                            <div class="alert alert-danger" role="alert">
                               <?php echo $msg;?>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>