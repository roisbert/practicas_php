<?php 

    $aNotas = array(9,8,9.50,4,7,8);
    function contar($aNotas){
        $cantidad = 0;
        foreach($aNotas as $item){
            $cantidad ++;
        }
        return $cantidad;
    }
    echo "Las notas son " . contar($aNotas);
  

?>
   
