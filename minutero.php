<?php 
    $hr = 21;
    $min = 10;

    for($i = 0; $i <= 60; $i++){
        echo $hr .  $min . "<br>";
        $min++;
        if($min == 60){
            $min = 00;
            $hr++;
        }
        if($hr == 24){
            $hr = 00;
        }
    

       
    }
    
?>