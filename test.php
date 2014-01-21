<?php

require_once("readprop.php");
$res = readprop("data.txt");

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

        if ($whatineed[$key] == $res[$key])
        {
            $result[$key] = "true";
        }

        else
        {
            $result[$key] = "false";
        }
    }
