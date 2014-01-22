<?php

require_once("readprop.php");
require_once("testvalues.php");

$res = readprop("data.txt");

$test = testvalues($res);

echo "<pre>
Результат проверки:<br>";
print_r($test);
echo "</pre>";

echo "<pre>
Результат функции:<br>";
print_r($res);
echo "</pre>";

?>


