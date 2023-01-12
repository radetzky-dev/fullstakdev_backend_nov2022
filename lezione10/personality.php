<html lang="en">
<head>
	<title>Personality</title>
</head>
<body>
<form method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	Select your personality:
		<input type="checkbox" name="attributes[]" value="perky">Perky<br>
		<input type="checkbox"  name="attributes[]" value="morose">Morose<br>
		<input type="checkbox"  name="attributes[]" value="thinking">Thinking<br>
		<input type="checkbox"  name="attributes[]" value="feeling">Feeling<br>
		<input type="checkbox"  name="attributes[]" value="thrifty">Thrifty<br>
		<input type="checkbox"  name="attributes[]" value="shopper">Shopper<br>

	<input type="submit" name="s" value="Record my personality!">
</form>
<?php
if (array_key_exists('s', $_GET)){
	$description = join(', ', $_GET['attributes']);
	echo  "You have a {$description} personality";
}
?>
</body>
</html>

