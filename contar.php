<?php 

    $aNotas = array(9,8,9.50,4,7,8);
    function contar($aNotas){
        $cantidad = 0;
        for($i = 0; $i < count($aNotas); $i++){
            $cantidad++;
        }
        return $cantidad;
    }
    echo contar($aNotas);
  

?>
   
