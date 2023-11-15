<?php
session_start();

$j = $_SESSION["numQuestions"];
$topics = array();
$score = 0;
$lang = $_GET["lang"];

for($i = 1; $i < $j; $i++){

    $answer = explode("/", $_POST["answer_$i"]);

    if($answer[1] == "correct"){
        $score++;

    }else{
        $topics[] = $answer[0];
    }
}

$score = $score/($j-1) * 100;

echo("<html><header></header><body><p> You scored $score%, "); 

if ($score < 100){
    echo("here are some topics for you to take a look at:</p>");

    foreach($topics as &$topic){
       echo("<ul> <a href = '../pages/activityPage.php?topic=$topic&lang=$lang' > $topic </ul>");
    }

}else{
    echo ("well done! </p>");
}

?>