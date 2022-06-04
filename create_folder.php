<?php
$file="create_folder.php";
mkdir("create_folder");
//rmdir("create_folder");//
echo filesize("create_folder.php");
echo"<br>";
echo filetype("create_folder.php");
if (file_exists($file))
{
	echo"file exists";
}
else
{
	echo"file does not exists";
}
?>