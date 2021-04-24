<?php
	$q1 = $_POST["Q1"];
	$q2 = $_POST["Q2"];
	$q3 = $_POST["Q3"];
	$q4 = $_POST["Q4"];
	$q5 = $_POST["Q5"];
	$score = 0;

	if($q1 == "2")
	{
		$score++;
	}
	if($q2 == "4")
	{
		$score++;
	}
	if($q3 == "Russia")
	{
		$score++;
	}
	if($q4 == "9")
	{
		$score++;
	}
	if($q5 == "Cheetah")
	{
		$score++;
	}
	$percent = $score * 20;
	
	echo "Q1: What is 1+1?<br>";
	echo "You answered: ". $q1. "<br>";
	echo "Correct answer: 2<br><br>";

	echo "Q2: What is 2*2?<br>";
	echo "You answered: ". $q2. "<br>";
	echo "Correct answer: 4<br><br>";

	echo "Q3: What is the largest country in the world?<br>";
	echo "You answered: ". $q3. "<br>";
	echo "Correct answer: Russia<br><br>";

	echo "Q4: What is the 100th digit of pi?<br>";
	echo "You answered: ". $q4. "<br>";
	echo "Correct answer: 9<br><br>";

	echo "Q5: Which animal is the fastest in the world?<br>";
	echo "You answered: ". $q5. "<br>";
	echo "Correct answer: Cheetah<br><br>";

	echo "You got ".$score." out of 5 right!<br>";
	echo "You got " .$percent."%";
?>