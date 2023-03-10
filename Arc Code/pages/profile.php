<?php
session_start();

$db = new mysqli("localhost","root","password","educode"); 

if($db->connect_error){
    die("<html><body><h1> Error: ".mysqli_connect_error()." </h1> <p>Arc Code are sorry for the inconvinience, please try again later  </p></body></html>");

    return 0; 
}

$sql = $db->prepare("SELECT username, isTeacher FROM users WHERE userID = ?");
$sql->bind_param("s", $_SESSION["id"]);
$sql->execute();
$result = $sql->get_result();

if ($result === FALSE){
    die("<html><body><h1> Error: Query unsuccessful </h1> <p>Arc Code are sorry for the inconvinience, please try again later  </p></body></html>");
    return 0;

}

$row = $result->fetch_assoc();

if ($row == null){
    header("location: ../signin.html");
    exit;
}

if ($row["isTeacher"] == 0){
    $db -> close();
    studentProfile($row["username"]);
}
else{
    $db -> close();
    echo("teacherProfile");
}

function studentProfile($name){

    $activities = getStudentActivities();

    echo("<h1 class='w3-margin w3-jumbo w3-text-black';><b> $name </b></h1> </header>");

    if ($activities == null){
        echo("no activities attempted. Here are some good places to start: <br>
        <li><a href = 'php\activityPage.php?topic=Output&lang=P'> Python: Print functions</a></li>
        <li><a href = 'php\activityPage.php?topic=Output&lang=J'>Java: Output functions</a></li>");
    }else{
        echo("TODO: activities list");
    }

    echo("<form action = ../php/logout.php> <input  type = 'submit' value = 'logout' > </form>");


}

function getStudentActivities(){

    $db = new mysqli("localhost","root","password","educode"); 

    $sql = $db->prepare("SELECT * FROM studentAttemptsActivity WHERE userID = ?");
    $sql->bind_param("s", $_SESSION["id"]);
    $sql->execute();
    $result = $sql->get_result();

    $activities = array();
    while($row = $result->fetch_assoc()){
        $activity = array();

        foreach($row as &$i){
            $activity[] = $i;

        }

        $activities[] = $activity;
    }

    return $activities;

}

?>