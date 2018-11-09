<?php
$names=array("Patrick","John","Marie","Claire","Paul");
foreach($names as $name){
	if(strstr($name,"Pa")){
		print "$name, ";
	}
function sum($x, $y){
	return $x + $y;
}
function subtract($x, $y){
	return $x - $y;
}
function multiply($x, $y){
	return $x * $y;
}
function divide($x, $y){
	return $x / $y;
}

class Calculator
{
 	public function sum($x, $y){
		echo $x + $y;
	}
	public function subtract($x, $y){
		echo $x - $y;
	}
	public function multiply($x, $y){
		echo $x * $y;
	}
	public function divide($x, $y){
		echo $x / $y;
	}
}
/*echo sum(5,7);
echo "\n";
echo subtract(5,7);
echo "\n";
echo multiply(5,7);
echo "\n";
echo divide(5,7);*/

$calculator = new Calculator();
echo $calculator->sum(5, 7);
echo "\n";
echo $calculator->subtract(8, 2);
echo "\n";
echo $calculator->multiply(2, 5);
echo "\n";
echo $calculator->divide(20, 4);

?>;