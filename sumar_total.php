<?php 

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
 $suma = 0;
 for($i = 0; $i< count($aProductos); $i++){
     $suma = $suma + $aProductos[$i]["precio"];
 }
 echo $suma;
?>