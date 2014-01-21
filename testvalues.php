<?php

function testvalues($array) {

    $array = readprop("data.txt");

    $whatineed = Array 
    (
    "1" => "2", 
    "test" => "test", 
    "sing" => "ping", 
    "Скотч" => "Swatch", 
    "Авот" => "Ашот=Крот", 
    "Ктор" => "Фтор" 
    );

    foreach ($whatineed as $key => $value)
    {

        if ($whatineed[$key] == $array[$key])
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
