<?php

$x = 1;
$y = 2; 
$element = rand(1,4);
$e = strrev();
$result;


if($element == 1){
	$e = "+";
	$result = $x + $y;
    
} else if($element == 2){
	$e = "-";
	$result = $x - $y; 
} else if($element == 3){
	$e = "*";
	$result = $x * $y; 
}
else{
	$e = "/";
	$result = $x / $y; 
}

echo ("$x $e  $y = $result");
?>

