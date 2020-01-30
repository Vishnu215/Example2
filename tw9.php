<?php

$states = "Mississippi Alabama Texas Massachusetts Kansas";
$statesArray = [];

$states1 = explode(' ', $states);
print_r($states1);
echo "<br> Original Array :<br>";

foreach ($states1 as $i => $value) 

print("STATES[$i]=$value<br>");

foreach ($states1 as $state) {
if(preg_match('/xas$/', ($state)))
$statesArray[0] = ($state);

}

foreach ($states1 as $state) {
if(preg_match('/^k.*s$/i', ($state))) // match multiple characters and it is case sensitive
$statesArray[1] = ($state);
}

foreach ($states1 as $state) {
if(preg_match('/^M.*s$/', ($state)))
$statesArray[2] = ($state);
}

foreach ($states1 as $state) {
if(preg_match('/a$/', ($state)))
$statesArray[3] = ($state);
}

echo "<br><br>Resultant Array :<br>";
foreach ($statesArray as $Array => $value){
print("STATES[$Array]=$value<br>");
}
?>