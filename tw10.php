<!-- 
step 1: create a database named as weblab
step 2: create a table with 4 coloums id,usn,name,addr
step 3: insert somes values to table with random usns ex 2,7,1,4,6 and name and addr 

save pgm as tw10.php
--> 

<!-- --------------read above instructions------------------------>


<html>
<body>
<style>
table, td, th
{
border: 1px solid black;
width: 33%;
text-align: center;
border-collapse:collapse;
background-color:lightblue;
}
table { margin: auto; }
</style>
<?php
$a=[];
$conn = mysqli_connect("localhost","root","","college" ) or die ("error" . mysqli_error($conn));
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
echo "<br>";
echo "<center> BEFORE SORTING </center>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>Address</th></tr>";
if ($result->num_rows> 0)
{
while($row = $result->fetch_assoc()){
echo "<tr>";
echo "<td>". $row["usn"]."</td>";
echo "<td>". $row["name"]."</td>";
echo "<td>". $row["addr"]."</td></tr>";

array_push($a,$row["usn"]);
}
}
else
echo "Table is Empty";
echo "</table>";
$n=count($a);
$b=$a;
for ( $i = 0 ; $i< ($n - 1) ; $i++ )
{
$pos= $i;
for ( $j = $i + 1 ; $j < $n ; $j++ )
	 {
	  if ( $a[$pos] > $a[$j] )
	   $pos= $j;
	 }
	if ( $pos!= $i ) {
	$temp=$a[$i];
	$a[$i] = $a[$pos];
	$a[$pos] = $temp;
	}
}
$c=[];
$d=[];
$result = $conn->query($sql);
if ($result->num_rows> 0)
{
while($row = $result->fetch_assoc()) {
for($i=0;$i<$n;$i++) {
if($row["usn"]== $a[$i]) {
$c[$i]=$row["name"];
$d[$i]=$row["addr"];
}
}
}
}
echo "<br>";
echo "<center> AFTER SORTING <center>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>Address</th></tr>";
for($i=0;$i<$n;$i++) {
echo "<tr>";
echo "<td>". $a[$i]."</td>";
echo "<td>". $c[$i]."</td>";
echo "<td>". $d[$i]."</td></tr>";
}
echo "</table>";
$conn->close();
?>
</body>
</html>