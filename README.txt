Function readprop() reads file in Java Properties format and returns data as 
Array (["name"] => "value")
It skips empty strings and commented by "#" symbol.

Fixed bug - when value contained equal sign, what was on the right
was not added in array.