<?php 
    
    $aEmpleados = array();
    $aEmpleados[] = array(
                          "dni" => "95825511",
                          "nombre" => "Roisbert Almenara",
                          "sueldo" => 30000
                         
    );
    $aEmpleados[] = array(
                          "dni" => "95825511",
                          "nombre" => "Roisbert Almenara",
                          "sueldo" => 30000
                         
    );
    
    $aEmpleados[] = array(
                          "dni" => "27295873",
                          "nombre" => "Roiner Almenara",
                          "sueldo" => 40000
    );
    $aEmpleados[] = array(
                          "dni" => "95000000",
                          "nombre" => "Deisy Andrade",
                          "sueldo" => 50000
    );
    
    function sueldoNeto($bruto){
        return number_format($bruto - ($bruto * 0.17), 2, ",", ".") ;
        
    }
    


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
           <div class="col-12">
            <h1>Listado empleados</h1>
           </div>
        </div>
        <div class="row">
            <div class="col-12">
               <table class="table table-hover border">
                    <tr>
                        <th>DNi</th>
                        <th>Nombre y Apellido</th>
                        <th>Sueldo</th>    
                    </tr>
                    <?php foreach($aEmpleados as $empleado) {?>
                    <tr>
                    
                        <td><?php echo $empleado["dni"]; ?></td>
                        <td><?php echo strtoupper($empleado["nombre"]); ?></td>
                        <td><?php echo sueldoNeto($empleado["sueldo"]); ?></td> 
                        
                    </tr>
                    <?php }?>
               </table> 
            </div>
        </div>
    </div>
</body>

</html>
