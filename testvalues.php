<?php

function testvalues($array) {

    $whatineed = Array //pattern Array
    (
    "1" => "2", 
    "test" => "test", 
    "sing" => "ping", 
    "Скотч" => "Swatch", 
    "Авот" => "Ашот=Крот", 
    "Ктор" => "Фтор" 
    );

    foreach ($whatineed as $key => $value) //read pattern Array in a cycle
    {

        if ($whatineed[$key] == $array[$key]) // if values are equal
        {
            $result[$key] = "true";
        }

        else
        {
            $result[$key] = "false";
        }
    }

    return $result;

}

?>
