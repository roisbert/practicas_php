<?php 


    function maximo($vector){
        $maximo = 0;
        foreach($vector as $item){
            if($maximo < $item){
                $maximo = $item;
            }
        }
        return $maximo;
    }
    $aNumeros = array(1,5,8,7,11,3,6);

    echo "El maximo es " . maximo($aNumeros);

?>