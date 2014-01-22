<?php

function readprop($filename) 
{
    $handler = fopen($filename, "r");
    while(!feof($handler)) 
    {
        $line=fgets($handler);
        $str = "/^([^#=]+)=([^\n\r]+)/";

        if (preg_match($str, $line, $matches))
        {
           $pname = trim($matches[1]);
           $pvalue = trim($matches[2]);
           $data[$pname]=$pvalue;
        }
    }

    fclose($handler);

    return $data;
}

?>
