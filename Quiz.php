<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  $scoreCounter = 0;
  $MAX_TOTAL = 5;

  $question1Correct = "Blue";
  $question2Correct = "It has no color";
  $question3Correct = "EECS448";
  $question4Correct = "Gibbons";
  $question5Correct = "The day before it's due :|";

  $question1Answer = $question2Answer = $question3Answer = $question4Answer = $question5Answer = "";
  $question1Answer = $_POST["Question1"];
  $question2Answer = $_POST["Question2"];
  $question3Answer = $_POST["Question3"];
  $question4Answer = $_POST["Question4"];
  $question5Answer = $_POST["Question5"];

  
  echo "<h2>Question 1: 'What color is the sky?'</h2>";
  echo "You answered: " . $question1Answer . "<br>";
  echo "Correct answer: " . $question1Correct . "<br>";
  if($question1Answer == $question1Correct)
    $scoreCounter++;

  echo "<h2>Question 2: 'What color is water?'</h2>";
  echo "You answered: " . $question2Answer . "<br>";
  echo "Correct answer: " . $question2Correct . "<br>";
  if($question2Answer == $question2Correct)
    $scoreCounter++;

  echo "<h2>Question 3: 'What class is this for?'</h2>";
  echo "You answered: " . $question3Answer . "<br>";
  echo "Correct answer: " . $question3Correct . "<br>";
  if($question3Answer == $question3Correct)
    $scoreCounter++;

  echo "<h2>Question 4: 'Who is the professor of this class?'</h2>";
  echo "You answered: " . $question4Answer . "<br>";
  echo "Correct answer: " . $question4Correct . "<br>";
  if($question4Answer == $question4Correct)
    $scoreCounter++;

  echo "<h2>Question 5: 'Who is the professor of this class?'</h2>";
  echo "You answered: " . $question5Answer . "<br>";
  echo "Correct answer: " . $question5Correct . " (What a bad student)<br>";
  if($question5Answer == $question5Correct)
    $scoreCounter++;



  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";

  echo "<h1>You scored " . $scoreCounter . "/" . $MAX_TOTAL . " = " . (($scoreCounter/$MAX_TOTAL)*100) . "%</h1>";


?>
