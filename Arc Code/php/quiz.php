<?php
$lang = $_POST["lang"]; //Either J or P depending on language, will be used to filter SQL
$questions; //Holds all question data for generating the page

function initialiseQuestionsArray(){ 
    //Sets up an array with 10 questions (+corresponding answers)

    $db = new mysqli("localhost","root","password","educode"); 
    //NOTE: this will not work on other computers, unless you set up a version of the database
    //TODO: host database

    if($db->connect_error){
        echo("Error: Cannot connect to question database - please try again later \nArc Code are sorry for the inconvinience");
        return 0; 

    }

    $sql = $db->prepare("SELECT questionText, correctAnswer, wrongA, wrongB, wrongC FROM quizquestions WHERE lang = ? ORDER BY RAND() LIMIT 1;"); //Pulls 10 random questions
    $sql->bind_param("s", $lang);
    $sql->execute();
    $result = $sql->get_result();

    if ($result === FALSE){
        echo("Error: Query failed, please try again later \nArc Code are sorry for the inconvinience");
        return 0;

    }

    while ($row=$result->fetch_assoc()){
       

    }
    return ("AAAA");

}

$questions = initialiseQuestionsArray();

if($questions == 0){
    //TODO: Error Page
    echo("error page");

}else{
    

}
    
?>