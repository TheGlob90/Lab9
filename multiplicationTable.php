<?php
function value ($x, $y)
{
	return ($x * $y);
}

echo "Exercise 1: Multiplication Table <b><br>";
echo"<table border='1'>";
echo"<tr>";
echo"<td> -- </td>";
for($i = 1; $i <=100; $i++)
{
	echo"<td>". $i. "</td>";
}
echo"</tr>";

for($i = 1; $i <= 100; $i++)
{
	echo "<td>$i</td>";
	for($j = 1; $j <= 100; $j++)
	{
		echo "<td>".value($i, $j)."</td>";	
	}
	echo"</tr>";
}
echo "</table>";
?>