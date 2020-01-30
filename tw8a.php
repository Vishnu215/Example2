<!DOCTYPE html>
<html>
<head>
	<title>tw8</title>
	<style type="text/css">
		table,td,th
		{
			border: 1px solid black;
			width: 35%;
			text-align: center;
			background-color:darkgray; 
		}
		table { margin: auto; }
		input,p {text-align: right;}
	</style>
</head>
<body>

<form method="post">
	<table>
		<caption>
			<h2>SIMPLE CALCULATOR</h2>
		</caption>
		<tr><td>First number:</td>
			<td>
				<input type="text" name="num1">
			</td>
	<td rowspan="2">
		<input type="submit" name="submit" value="calculate">
	</td>
</tr>

<tr>
	<td>Second number</td>
	<td><input type="text" name="num2"></td>
</tr>

<?php
if(isset($_POST['submit']))
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];

	if(is_numeric($num1) and is_numeric($num2))
	{
		echo "<tr><td>Addition:</td><td><p>".($num1+$num2)."</p></td>";

		echo "<tr><td>Substraction:</td><td><p>".($num1-$num2)."</p></td>";

		echo "<tr><td>Multiplication:</td><td><p>".($num1*$num2)."</p></td>";

		echo "<tr><td>Division:</td><td><p>".($num1/$num2)."</p></td>";

		

	}
	else{
		echo "<script type='text/javascript'>alert('ENTER THE VALID NUMBER');</script>";
	}

}
	?>
</table>
</form>
</body>
</html>