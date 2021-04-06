<?php 
    $aNumeros = array(1,5,8,7,11,3,6);

    function promediar($aNumeros){
        $suma = 0;
        $cantidad = 0;
        foreach($aNumeros as $numero){
            $suma = $suma + $numero; 
            $cantidad ++;
        }
        return $suma / $cantidad;
    }
    echo promediar($aNumeros);
?>