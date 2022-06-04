<html>
<body>
<form action ="" method="post">
Name:<input type ="text" name="name"><br>
E-mail:<input type="text" name="email"><br>
<input type ="submit">
</form>
</body>
</html>
<?PHP
if(isset($_POST["submit"]))
{
	echo$_POST["name"]."<br>;
	echo$_POST["email"];

}
?>