<?php

function readprop($filename) 
{
    $handler = fopen($filename, "r");
    while(!feof($handler)) 
    {
        $str1=fgets($handler);
        $str=trim($str1);

        if(!empty($str) && $str{0}!="#")
        {
            $a = split("=", $str, 2);
            $data[$a[0]]=$a[1];
        }
    }

    fclose($handler);

    return $data;
}

?>
