<?php 

    $aArray = array();
    $aArray[0] = array();
    $aArray[0][1] = "1";
    $aArray[0][2] = "2";
    $aArray[0][3] = "3";

    $aArray[1] = array();
    $aArray[1][0] = "";
    $aArray[1][1] = "hola";
    
    $aArray[3] = "bye";

    $aArray = array(
                    array("1", "2", "3"),
                    array("", "hola"),
                    "bye"
    );

    print_r($aArray);


?>