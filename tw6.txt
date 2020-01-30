<!DOCTYPE html>
<html>
<head>
	<title>tw6</title>
</head>
<body>
	<?php
	print"<h1>REFRESH THE PAGE</h1>";

	$name="counter.txt";
	$file=fopen($name,"r");
	$hits=fscanf($file, "%d");
	fclose($file);
	$hits[0]++;
	$file=fopen($name, "w");
	fprintf($file,"%d",$hits[0]);
	fclose($file);

	print"Total number of views:".$hits[0];
	?>
</body>
</html>