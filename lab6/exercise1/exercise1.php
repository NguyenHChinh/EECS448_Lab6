<?php 
error_reporting(E_ALL); 
ini_set("display_errors", 1); 

// Exercise 1: 100x100 Multiplication Table
echo "<td> </td>";

for ($i = 1; $i < 101; $i++) {
	echo "<td>".$i."</td>";
}

echo "<tr>";

for ($row = 1; $row < 101; $row++) {
	echo "<td>".$row."</td>";
	for ($col = 1; $col < 101; $col++) {
		echo "<td>".$row*$col."</td>";
	}
	echo "<tr>";
}
?> 