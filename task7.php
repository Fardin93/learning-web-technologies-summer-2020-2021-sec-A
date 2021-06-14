<?php
//we print starts in ascending order
//a nested for loop is used for the height of the triangle which is 3
for($i = 0; $i < 3; $i++){
	//and an inner for loop is created for the width of the triangle star
	//each iteration of the inner for loop adds 1 star to the triangle
	for($j = 0; $j <= $i; $j++){
		echo "*";
	}
	//a new line is created
	echo "<br>";
}
echo "<br>";
//we print numbers in descending order
//we start with 3 numbers to print
for($i = 3; $i > 0; $i--){
	//for each iteration we subtract 1 numbers
	//in the new line
	for($j = 1; $j <= $i; $j++){
		echo $j;
	}
	echo "<br>";
}
echo "<br>";
//a character can be incremented
$letter = 'A';
//we print the letters in ascending order
for($i = 0; $i < 3; $i++){
	for($j = 0; $j <= $i; $j++){
		//letters or characters can be increment
		//so if we add to 'A' it becomes 'B' and so on
		echo $letter++;
	}
	echo "<br>";
}
?>