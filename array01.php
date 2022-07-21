<?php

// 陣列 array

$student = array("王小明","陳美莉","李聰明","羅玉兔","蔡小英");
echo $student[0];
echo "<br>";
echo $student[3] . "<br>";
echo "<hr>";

for ($i=0; $i <4 ; $i++) { 
	echo $student[$i] . "<br>";
}
?>