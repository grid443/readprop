<?php

function readprop($filename) {
    $handler = fopen($filename, "r");
    while(!feof($handler)) {
        $array[]=fgets($handler);
    }
    
    for($i=0; $i<count($array); $i++)
    {
        if(!empty($array[$i]))
        $data[$i] = explode("=", $array[$i]);
    }
    
    return $data;
}