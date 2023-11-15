<!DOCTYPE html>
<html lang='en'>
<head>
<title>Arc Code</title>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link href='https://fonts.googleapis.com/css?family=Roboto&display=swap' rel='stylesheet'>
<link rel='icon' href='..\images\h.png' type='image/x-icon'>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: 'Lato', sans-serif}
.w3-bar,h1,button {font-family: 'Montserrat', sans-serif}
.fa-anchor,.fa-coffee,h1 {font-size:200px}
</style>
</head>
<body>
    <head>
                <title>CSS Basics</title>
                <link rel='stylesheet' href='css/home.css'>
            </head>
<!-- Navbar -->
<div class='w3-top'>
    <div class='w3-bar w3-blue w3-card w3-left-align w3-large w3-solid'>
      <a class='w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-blue' href='javascript:void(0);' onclick='myFunction()' title='Toggle Navigation Menu'><i class='fa fa-bars'></i></a>
<a href='../index.php' class='w3-bar-item w3-button w3-text-black'><i class=''></i><b>Home</b></a>
<a href='Java.php' class='w3-bar-item w3-button w3-hide-small w3-text-black'><i class=''></i><b>Java</b></a>
<a href='Python.php' class='w3-bar-item w3-button w3-hide-small w3-text-black'><i class=''></i><b>Python</b></a>
<?php session_start(); if($_SESSION['id']>0){
    echo("<a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-right' href='profile.php' title='Exercises'>View Your Profile</a>");
    }
    else{
      echo("<a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-right' href='signin.html' title='Exercises'>Sign In</a>");
    } ?>
</div>

  <!-- Navbar on small screens -->
  <div id='navDemo' class='w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large'>
    <a href='../index.php' class='w3-bar-item w3-button w3-text-black'><i class=''></i><b>Home</b></a>
    <a href='Java.php' class='w3-bar-item w3-button w3-hide-small w3-text-black'><i class=''></i><b>Java</b></a>
    <a href='Python.php' class='w3-bar-item w3-button w3-hide-small w3-text-black'><i class=''></i><b>Python</b></a>

    <?php session_start(); if($_SESSION['id']>0){
    echo("<a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-right' href='profile.php' title='Exercises'>View Your Profile</a>");
    }
    else{
      echo("<a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-right' href='signin.html' title='Exercises'>Sign In</a>");
    } ?>
    <!--CHANGES BUTTON FROM SIGN IN TO PROFILE BUTTON-->
  </div>
</div>

<?php

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
    header("location: signin.html");
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

echo("<form action = ../php/logout.php> <input  type = 'submit' value = 'logout' > </form>");
exit;

function studentProfile($name){

    $activities = getStudentActivities();

    echo("<header class='w3-container w3-blue w3-center w3-bar-block' style='padding:30px 20px'>
    <h1 class='w3-margin w3-jumbo w3-text-black';><b> <br>$name</b></h1> </header>
  <svg style='background-color: rgb(255, 255, 255) color w3-blue ;' width='100%' height='200' viewBox='5 10 100 100' preserveAspectRatio='none'>
  <path id='wavepath' d='M0,0 L110,0C35,150 35,0 0,100z' fill='#2894f4'></path>
  </svg>");

    if ($activities == null){
        echo("no activities attempted. Here are some good places to start: <br>
        <li><a href = 'php\activityPage.php?topic=Output&lang=P'> Python: Print functions</a></li>
        <li><a href = 'php\activityPage.php?topic=Output&lang=J'>Java: Output functions</a></li>");
    }else{
        echo("Completed activities: ");
        foreach($activities[0] as &$activity){
            echo("<li><a href = 'activityPage.php?topic=$activity[1]&lang=$activity[0]'> $activity[1] </a> Attempts: $activity[2]</li>");
        }

        if(count($activities[1]) == 0){
            echo("If you think you're up to the challenge why not try out out one of our <a href = #>project tutorials</a>");
        }
        else{
            echo("<br>Stuck on what to do next? Heres some activities you haven't completed yet:");

            foreach($activities[1] as &$activity){
                echo("<li><a href = 'activityPage.php?topic=$activity[1]&lang=$activity[0]'> $activity[1] </a> Attempts: $activity[2]</li>");
            }
        }
    }

}

function getStudentActivities(){

    $db = new mysqli("localhost","root","password","educode"); 

    $sql = $db->prepare("SELECT fitgactivities.lang, fitgactivities.topic, studentattemptsactivity.attempts, studentattemptsactivity.completed FROM fitgactivities JOIN studentattemptsactivity ON fitgactivities.activityID = studentattemptsactivity.activityID WHERE studentattemptsactivity.userID = ? ORDER BY studentattemptsactivity.completed DESC;");
    $sql->bind_param("i", $_SESSION["id"]);
    $sql->execute();
    $result = $sql->get_result();

    $completed = array();
    $uncompleted = array();

    while($row = $result->fetch_assoc()){
        $activity = array();

        // ORDER IS: language, topic, attempts, completed
        foreach($row as &$i){
            $activity[] = $i;
        }

        if($row["completed"] == 0){
            $uncompleted[] = $activity;
        }else{
            $completed[] = $activity;
        }
    }

    $activities[] = $completed;
    $activities[] = $uncompleted;

    return $activities;


}

?>


<div class='w3-container w3-blue w3-center w3-padding-64'>
  <footer class='w3-container w3-center w3-padding-100 w3-blue'>
    <div class='w3-container w3-padding-100'>
    <a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left' href='java.php' style='font-size:17px;margin-top:-9px;margin-top:-9px' title='Java'>JAVA</a>
            <a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left' href='python.php' style='font-size:17px;margin-top:-9px;margin-left:12px' title='Python'>PYTHON</a>
            <a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left' href='quiz.php' style='font-size:17px;margin-top:-9px;margin-left:12px' title='Quizzes'>QUIZZES</a>
            <a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left' href='#' style='font-size:17px;margin-top:-9px;margin-left:12px' title='Projects'>PROJECTS</a>
            <a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left' href='../index.php#about us' style='font-size:17px;margin-top:-9px;margin-left:12px' title='About Us'>ABOUT US</a>
       </div><br><br><br><br>
       <p class='w3-medium w3-text-white'>
       The comprehensive and cutting-edge website Arc Code was created to offer those wishing to improve their skills and knowledge with high-quality education, training, and mini-games.<br>Arc Code provides a comprehensive selection of tutorials and courses in Java and Python.<br>Students can learn whenever and wherever they want because of the website’s accessibility and ease of use.<br>It is designed to make it a more friendly experience by having mini-games built into the website.</p></footer>
</div>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById('navDemo');
  if (x.className.indexOf('w3-show') == -1) {
    x.className += ' w3-show';
  } else { 
    x.className = x.className.replace(' w3-show', '');
  }
}
</script>

</body>
</html>