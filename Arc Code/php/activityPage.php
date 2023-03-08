<?php
session_start();
$_SESSION["topic"] = $_GET["topic"];
$_SESSION["lang"] = $_GET["lang"];

function initialisePage(){

    $db = new mysqli("localhost","root","password","educode"); 

    if($db->connect_error){
        echo("<html><body><h1> Error: Cannot connect to the database at this time </h1> <p>Arc Code are sorry for the inconvinience, please try again later  </p></body></html>");

        return 0; 

    }

    $sql = $db->prepare("SELECT unfilledText, filledText, task, desiredOutput FROM fitgactivities WHERE lang = ? AND topic = ? LIMIT 1;"); //Pull out activity information
    $sql->bind_param("ss", $_SESSION["lang"], $_SESSION["topic"]);
    $sql->execute();
    $result = $sql->get_result();

    if ($result === FALSE){
        echo("<html><body><h1> Error: Query unsuccessful </h1> <p>Arc Code are sorry for the inconvinience, please try again later  </p></body></html>");
        return 0;

    }

    if ($result -> num_rows <= 0){
        echo("<html><body><h1> Error: No activities found for that language or topic </h1> <p>Arc Code are sorry for the inconvinience, please try again later </p></body></html>");
        return 0;
    }

    $activity = array();
    while ($row = $result->fetch_assoc()){

        //$activity[] = $row["before"];
        //$activity[] = $row["after"];
        $activity[] = $row["task"];
        $activity[] = $row["desiredOutput"];
        $activity[] = $row["filledText"];
        $activity[] = explode("?",$row["unfilledText"]);

    }

    return $activity;

}

function displayPage($activity){

    $topic = $_SESSION['topic'];
    
    if($_SESSION["lang"] == "J"){
        $lang = "Java";
    }else{
        $lang = "Python";
    }

    $header = fopen("pagedata/header.txt","r") or die("Header element unreadable - Please try again later");
    echo(fread($header,filesize("pagedata/header.txt")));
    fclose($header);

    echo("<h1 class='w3-margin w3-jumbo w3-text-black';><b> $lang $topic </b></h1>");
     
    echo("
    </header>
    <svg style='background-color: rgb(255, 255, 255) color w3-blue ;' width='110%' height='200' viewBox='10 10 100 100' preserveAspectRatio='none'>
        <path id='wavepath' d='M0,0 L110,0C35,150 35,0 0,100z' fill='#2894f4'></path>
    </svg>");

    $tutorial = fopen("pagedata/$lang $topic.txt","r") or die("Tutorial element unreadable - Please try again later");
    echo(fread($tutorial,filesize("pagedata/$lang $topic.txt")));
    fclose($tutorial);

    displayActivity($activity);

    $footer = fopen("pagedata/footer.txt","r");
    echo(fread($footer,filesize("pagedata/footer.txt")));
    fclose($footer);

}

function displayActivity($activity){

    $instruction = $activity[0];
    $correctOutput = $activity[1];
    $correctString = $activity[2];
    unset($activity[0]);
    unset($activity[1]);
    unset($activity[2]);

    $activity = $activity[3];

    echo("
        <p>Try it yourself! <br> $instruction
        <form id = 'FITG' data-value = '$correctOutput'>
    "); 

    $j = 0;
    foreach($activity as &$i){
        if ($i == ' '){
            echo("<input type = 'textarea' name = 'box $j'>");
        } else{
            echo("$i");
        }

        $j++;
    }

    echo("
    <br> <button type = 'button'> Check Answer </button> <button type = 'button'> Reveal Answer </button>
    </form>
    <script src ='..\js\SCRIPTNAME.js'> </script>
    ");
    //TODO kyle needs to write javascript that can check the answers
    //NOTE: correct answer is stored inside the form object under data-value, which has id "FITG"
    //NOTE: page cannot refresh because it will lose a bunch of data and cause errors
}

$activity = initialisePage();
displayPage($activity);

?>