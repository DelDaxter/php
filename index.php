<!DOCTYPE html>
<html>
<head>
	<title>Friend book</title>
	<style>
/* Style the header */
header {
 background-color: #666;
 padding: 30px;
 text-align: center;
 font-size: 35px;
 color: white;
}
/* Style the footer */
footer {
 background-color: #777;
 padding: 10px;
 text-align: center;
 color: white;
}
p{
	font-size: 35px;

}
li{
	width: 10;
}
</style>
</head>

</head>
<body>
<header>
 <h2>Friend book</h2>
</header>
<br>
	<form method="post" action="index.php" >
	 Name:<input type="text" name="name">
	<input type="submit">
	</form>
<br>

<p><b>My Best Friends :</b></p>
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
	    if(isset($_POST['filter']) and $_POST['filter']!='' and !isset($_POST['startingWith']) ){
	    	$ligne=strstr($ligne, $_POST['filter'],true).strstr($ligne, $_POST['filter']);
	    	if($ligne)echo "<ul><li>$ligne</ul></li>";
	    }
	    elseif(isset($_POST['filter']) and $_POST['filter']!='' and isset($_POST['startingWith']) ){
	    	if((strpos($ligne, $_POST['filter'])!=1)){
	    		
	    		$ligne=strstr($ligne, $_POST['filter']);
	    	}
	    	else{
	    		$ligne=NULL;
	    	}
	    	if($ligne)echo "<ul><li>$ligne</ul></li>";
	    	}
	    else{
	   			if($ligne)echo "<ul><li>$ligne</ul></li>";
	   		}

	    
	}
	
?>
<br>
	<form method="post" action="index.php" >
	<input type="text" name="filter">
	<input type="submit" value="Filter list">
	<input type="checkbox" name="startingWith" >Only names starting with</input>
	</form>
	
<br>
<footer>
 <h2>footer</h2>
</footer>
</body>
</html>
