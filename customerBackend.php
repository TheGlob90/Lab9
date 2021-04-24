<?php
	echo"<link href = 'style.css' rel = 'stylesheet' type = 'text/css'/>";

	$Q1 = $_POST["i1"];
	$Q2 = $_POST["i2"];
	$Q3 = $_POST["i3"];
	$P = $_POST["pwd"];
	$S = $_POST["shipping"];

	$P2 = $Q2 * 2;
	$P3 = $Q3 * 10;
	$T = $Q1 + $P2 + $P3 + $S;

	echo"<h1>WELCOME TO STORE INC</h1>";
	echo"<p>We appreciate your purchase and hope you choose us again soon.</p>";
	echo"<p>Your password is: $P</p>";
	echo"<p>Your reciept: </p>";
	
	echo"<table border='1'>";
	echo"<tr>";
		echo"<td></td>";
		echo"<td>Quantity</td>";
		echo"<td>Cost Per Item</td>";
		echo"<td>SubTotal</td>";
	echo"</tr>";

	echo"<tr>";
		echo"<td>Item 1</td>";
		echo"<td>$Q1</td>";
		echo"<td>$1.00</td>";
		echo"<td>$$Q1</td>";
	echo"</tr>";

	echo"<tr>";
		echo"<td>Item 2</td>";
		echo"<td>$Q2</td>";
		echo"<td>$2.00</td>";
		echo"<td>$$P2</td>";
	echo"</tr>";

	echo"<tr>";
		echo"<td>Item 3</td>";
		echo"<td>$Q3</td>";
		echo"<td>$10.00</td>";
		echo"<td>$$P3</td>";
	echo"</tr>";

	echo"<tr>";
		echo"<td>Shipping</td>";
		echo"<td>";
		if($S == "0")
		{
			echo"Free";
		}
		else if($S == "50")
		{
			echo"Overnight";
		}
		else
		{
			echo"3 day";
		}
		echo"</td>";
		echo"<td></td>";
		echo"<td>$$S</td>";
	echo"</tr>";
	
	echo"<tr>";
		echo"<td>Total Cost</td>";
		echo"<td></td>";
		echo"<td></td>";
		echo"<td>$$T</td>";
	echo"</tr>";
	echo"</table>";
?>