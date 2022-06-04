<?php
$To="XYZ@gmail.com";
$from="ABC@gmail.com";
$subject="hello";
$headers="from:&from";
if(Mail($To,$from,$subject,$headers))
{
	echo"mail sent";
}
	else
{
	echo"mail not ";
}
?>