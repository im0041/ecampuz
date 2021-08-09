<?php 
$a=0;
do{
	$a++;
	$b = $a%3;
	if ($b==0){
		echo "<br/>";
		echo "Foo";
	}
	$c = $a%5;
	if ($c==0){
		echo "Bar";
		echo "<br/>";
	} 
	if ($c != 0 && $b !=0) {
		echo "<br/>";
		echo $a;
		echo "<br/>";
	}
} while ($a <= 50);

 ?>
