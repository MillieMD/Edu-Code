<?php
$_POST["lang"]; //Either J or P depending on language, will be used to filter SQL
$questions = array(); //Holds all question data for generating the page

function initialiseQuestionsArray($lang){ 
    //Sets up an array with 10 questions (+corresponding answers)

    $db = new mysqli("localhost","root","password","educode"); 
    //NOTE: this will not work on other computers, unless you set up a version of the database using the mysql db dump
    //TODO: host database

    if($db->connect_error){
        echo("<html><body><h1> Error: Cannot connect to the database at this time </h1> <p>Arc Code are sorry for the inconvinience, please try again later  </p></body></html>");

        return 0; 

    }

    $sql = $db->prepare("SELECT questionText, correctAnswer, wrongA, wrongB, wrongC, topic FROM quizquestions WHERE lang = ? ORDER BY RAND() LIMIT 10;"); //Pulls 10 random questions
    $sql->bind_param("s", $lang);
    $sql->execute();
    $result = $sql->get_result();

    if ($result === FALSE){
        echo("<html><body><h1> Error: Query unsuccessful </h1> <p>Arc Code are sorry for the inconvinience, please try again later  </p></body></html>");
        return 0;

    }

    if ($result -> num_rows <= 0){
        echo("<html><body><h1> Error: No questions found for that language </h1> <p>Arc Code are sorry for the inconvinience, please try again later </p></body></html>");
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
        echo("<html><body><p> Question $j. $currentQuestion </p> <form id = 'question + $j' data-value = '$topic'>");

        foreach($answers as &$answer){

            if($answer == $correctAnswer){
                echo("<input type = 'radio' name = 'answer + $j' value = 'correct'> <label> $answer </label> <br>");
            }else{
                echo("<input type = 'radio' name = 'answer + $j' value = 'wrong'> <label> $answer </label> <br>");
            }
            
        }

        $j++;
    }

    echo("
            <button type = 'button' onclick = 'checkAnswer($j);'> Check Answers </button> </form> 
            <script src = >
            function checkAnswer(numQuestions){

                document.getElementsById('question 1').style.color = 'red';
            
                /*var score = 0;
            
                for(var i = 1; i < 11; i++){
                    var currentQuestion = document.getElementByName('answer' + i);
            
                    for(var j = 0; j < currentQuestion.legnth; j++){
                        
                    }
                }*/
            
                return false;
            </script>
            ");
    //TODO: Script to check the answer is correct then load the next question somehow

}

$questions = initialiseQuestionsArray($_POST["lang"]);
displayQuestion($questions);

    
?>