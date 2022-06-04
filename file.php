<?php
$file="newfile.txt";
if (file_exists($file))
{
	echo readfile($file);
	unlink("newfile.txt");
}
else
{
	echo"file does not exists";
}
?>