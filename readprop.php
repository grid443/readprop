<?php

function readprop($filename) 
{
    $handler = fopen($filename, "r"); // open file for reading
    while(!feof($handler))
    {
        $line=fgets($handler); //read one string from file
        $str = "/^([^#=]+)=([^\n\r]+)/"; //regular expression for preg_match()

        if (preg_match($str, $line, $matches)) //drop line in array according to regular expression
        {
           $pname = trim($matches[1]);  //get name
           $pvalue = trim($matches[2]); //get value
           $data[$pname]=$pvalue;  //write them into Array(["name"] => "value")
        }
    }

    fclose($handler); //close file

    return $data;
}

?>
