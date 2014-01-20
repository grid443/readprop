<?php

function readprop($filename) 
{
    $handler = fopen($filename, "r");
    while(!feof($handler)) 
    {
        $str=fgets($handler);
        if(!empty($str) && $str{0}!="#")
        {
            $a = explode("=", $str);
            $data[$a[0]]=$a[1];
        }
    }

    fclose($filename);

    return $data;
}

?>
