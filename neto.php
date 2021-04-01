<?php 

    function calcularNeto($bruto){
        return $bruto - ($bruto * 0.17);
    }
      $neto = calcularNeto(50000);
      echo "el sueldo neto es " . $neto;
?>