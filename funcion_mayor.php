<?php 

    function maximo($vector){
        $maximo = 0;
        foreach($vector as $item){
            $maximo = $item;
            if($maximo > $item){
                $maximo = $item;
            }
        }
        return $maximo;
    }

    echo "El maximo es " . maximo($aNotas);

?>