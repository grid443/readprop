<?php

function readprop($filename) 
{
    $handler = fopen($filename, "r");
    while(!feof($handler)) 
    {
        $array[]=fgets($handler);
    }
    
    for($i=0; $i<count($array); $i++)
    {
        $a = explode("=", $array[$i]);
        if(!empty($a[1]) && $a[0]{0}!="#") 
        {
            $data[$a[0]]=$a[1];
        }
    }
    
    return $data;
}
?>