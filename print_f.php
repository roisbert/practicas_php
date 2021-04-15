<?php 

    function print_f($variable){
        
        if(is_array($variable)){
            $contenido = "";
            foreach($variable as $item){
                $contenido = $contenido . $item ."/n";
             }
             file_put_contents("datos.txt", $contenido);
        }else{
            file_put_contents("datos.txt", $variable);
        }
    }

    $aNotas = array(8, 5, 7, 9, 10, 9);
    print_f($aNotas);

?>