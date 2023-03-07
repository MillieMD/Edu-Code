<?php
session_start();

$j = $_SESSION["numQuestions"];
$topics = array();
$score = 0;

for($i = 1; $i < $j; $i++){

    $answer = explode("/", $_POST["answer_$i"]);

    if($answer[1] == "correct"){
        $score++;

    }else{
        $topics[] = $answer[0];
    }
}

echo("<html><header></header><body><p> Your score is $score. You need to work on:</p>");

foreach($topics as &$topic){
   echo("<ul> $topic </ul>");
}

session_destroy();
?>