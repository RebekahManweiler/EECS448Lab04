<?php

$total = 0;
$question1 = $_POST["numletters"];
$question2 = $_POST["woodchuck"];
$question3 = $_POST["scienceword"];
$question4 = $_POST["questions"];
$question5 = $_POST["update"];

if($question1 == "12") $total += 20;
if($question2 == "31") $total += 20;
if($question3 == "A thyroid disorder") $total += 20;
if($question4 == "3") $total += 20;
if($question5 == "26 September, at 08:16") $total += 20;

echo "You scored ".$total."/100<br><br>";
echo "Question 1: How many letters are in this sentence?<br>";
echo "You answered: ".$question1."<br>";
echo "Correct answer: 12<br><br>";
echo "Question 2: How much wood could a wood-chuck chuck, if a wood-chuck could chuck wood?<br>";
echo "You answered: ".$question2."<br>";
echo "Correct answer: 31<br><br>";
echo "Question 2: What is PSEUDOPSEUDOHYPOPARATHYROIDISM?<br>";
echo "You answered: ".$question3."<br>";
echo "Correct answer: A thyroid disorder<br><br>";
echo "Question 3: How many questions have you answered so far?<br>";
echo "You answered: ".$question4."<br>";
echo "Correct answer: 3<br><br>";
echo "Question 4: When was the Schedule page for the KU EECS 448 Wiki last updated?<br>";
echo "You answered: ".$question5."<br>";
echo "Correct answer: 26 September, at 08:16<br><br>";

?>
