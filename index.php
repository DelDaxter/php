<!DOCTYPE html>
<html>
<head>
	<title>Friend list</title>
</head>
<body>
	<form method="post" action="task3.php" >
	 Name:<input type="text" name="name">
	<input type="submit">
	</form>
<?php
	$filename = 'friends.txt';
	if(isset($_POST['name'])) {
		$file = fopen( $filename, "a" );
		fwrite( $file, $_POST['name']);
		fwrite( $file, "\n");
	}

	$file = fopen( $filename, "r" );
	while (!feof($file)) {
	    $ligne=fgets($file);
	    echo "$ligne<br>";
	}
	
?>
</body>
</html>
