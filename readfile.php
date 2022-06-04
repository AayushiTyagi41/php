<?php
echo readfile("file.php","R");
echo fopen(fread("file.php",10));
echo fgets(); 
?> 