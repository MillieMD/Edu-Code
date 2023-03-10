<?php
session_start();
$_POST["lang"]; //Either J or P depending on language, will be used to filter SQL
$questions = array(); //Holds all question data for generating the page

function initialiseQuestionsArray($lang){ 
    //Sets up an array with 10 questions (+corresponding answers)

    $db = new mysqli("localhost","root","password","educode"); 
    //NOTE: this will not work on other computers, unless you set up a version of the database using the mysql db dump
    //TODO: host database

    if($db->connect_error){
        die("<html><body><h1> Error: ".mysqli_connect_error()." </h1> <p>Arc Code are sorry for the inconvinience, please try again later  </p></body></html>");

        return 0; 

    }

    $sql = $db->prepare("SELECT questionText, correctAnswer, wrongA, wrongB, wrongC, topic FROM quizquestions WHERE lang = ? ORDER BY RAND() LIMIT 10;"); //Pulls 10 random questions
    $sql->bind_param("s", $lang);
    $sql->execute();
    $result = $sql->get_result();

    if ($result === FALSE){
        die("<html><body><h1> Error: Query unsuccessful </h1> <p>Arc Code are sorry for the inconvinience, please try again later  </p></body></html>");
        return 0;

    }

    if ($result -> num_rows <= 0){
        die("<html><body><h1> Error: No questions found for that language </h1> <p>Arc Code are sorry for the inconvinience, please try again later </p></body></html>");
        return 0;
    }

    $questions = array(); //holds all question arrays
    while ($row = $result->fetch_assoc()){
        $question = array($row["topic"],$row["questionText"],$row["correctAnswer"],$row["wrongA"]); //individual question data

        //these two answers are optional to allow for 2-4 answers per question, if they're null just don't add them to the array
        if($row["wrongB"] != null){
            $question[] = $row["wrongB"];
        }

        if($row["wrongC"] != null){
            $question[] = $row["wrongC"];
        }

        $questions[] = $question;

    }

    return $questions;
    
}

function displayQuestion($questions){
    //$i is the index of the question to be displayed in the $questions array,
    //$j is the question number

    $header = fopen("pagedata/header.txt","r") or die("Header element unreadable - Please try again later");
    echo(fread($header,filesize("pagedata/header.txt")));
    fclose($header);

    if($_POST["lang"] == "J"){
        $lang = "Java";
    }else{
        $lang = "Python";
    }

    echo("<h1 class='w3-margin w3-jumbo w3-text-black';><b> $lang Quiz </b></h1> </header>");

    $j = 1;
    foreach($questions as &$question){

        $topic = $question[0];
        $currentQuestion = $question[1];
        unset($question[0]);
        unset($question[1]);

        $answers = array();
        $answers = $question;
        $correctAnswer = $answers[2]; //because 2 have been unset, the beginning of the array is 2 now
        shuffle($answers); //prevents the correct answer always being the first, while still allowing it to be the first when creating the array so its easy to find

        //TODO: Add header + CSS to the page, link from here
        echo("<html><body><p> Question $j. $currentQuestion </p> <form action = 'checkQuiz.php' method = 'post' id = 'quiz'>");

        foreach($answers as &$answer){

            if($answer == $correctAnswer){
                echo("<input type = 'radio' name = 'answer $j' value = '$topic/correct'> <label> $answer </label> </input> <br>");
            }else{
                echo("<input type = 'radio' name = 'answer $j' value = '$topic/wrong'> <label> $answer </label> </input> <br>");
            }
            
        }

        $j++;

    }
    
    echo("
        <br><input type = 'submit' name = 'submit' value = 'Check Answers'> </form> ");
    //TODO: PHP script to check the answer is correct then suggest topics for improvement

    $_SESSION["numQuestions"] = $j;
 
}

$questions = initialiseQuestionsArray($_POST["lang"]);

if($questions == 0){
    echo("uh oh");
    
}else{
    displayQuestion($questions);

}
   

?>