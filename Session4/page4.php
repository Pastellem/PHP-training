<?php
$file = fopen("/var/www/html/hello.txt","w+");
fwrite($file,"Bonjour.");
fclose($file);
?> 
