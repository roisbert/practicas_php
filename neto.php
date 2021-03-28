<?php 

    function calcularNeto($bruto){
        return $bruto - ($bruto * 0.17);
    }
     echo $neto = calcularNeto(50000);
?>