<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arc Code</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="images\h.png" type="image/x-icon">
    <style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee,h1 {font-size:200px}
</style>
</head>
<body>
<head>
    <title>CSS Basics</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-blue w3-card w3-left-align w3-large w3-solid">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-blue" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="../index.php" class="w3-bar-item w3-button w3-text-black"><i class=""></i><b>Home</b></a>
        <a href="Java.php" class="w3-bar-item w3-button w3-hide-small w3-text-black"><i class=""></i><b>Java</b></a>
        <a href="Python.php" class="w3-bar-item w3-button w3-hide-small w3-text-black"><i class=""></i><b>Python</b></a>
        <?php session_start(); if($_SESSION['id']>0){
    echo("<a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-right' href='profile.php' title='Exercises'>View Your Profile</a>");
    }
    else{
      echo("<a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-right' href='signin.html' title='Exercises'>Sign In</a>");
    } ?>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="../index.php" class="w3-bar-item w3-button w3-text-black"><i class=""></i><b>Home</b></a>
        <a href="Java.php" class="w3-bar-item w3-button w3-hide-small w3-text-black"><i class=""></i><b>Java</b></a>
        <a href="Python.php" class="w3-bar-item w3-button w3-hide-small w3-text-black"><i class=""></i><b>Python</b></a>
        <?php session_start(); if($_SESSION['id']>0){
    echo("<a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-right' href='profile.php' title='Exercises'>View Your Profile</a>");
    }
    else{
      echo("<a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-right' href='signin.html' title='Exercises'>Sign In</a>");
    } ?>
    </div>
</div>
<header class="w3-container w3-blue w3-center w3-bar-block" style="padding:30px 20px">
    <h1 class="w3-margin w3-jumbo w3-text-black";><b>Java</b></h1>
</header>
<svg style="background-color: rgb(255, 255, 255) color w3-blue ;" width="110%" height="200" viewBox="10 10 100 100" preserveAspectRatio="none">
    <path id="wavepath" d="M0,0 L110,0C35,150 35,0 0,100z" fill="#2894f4"></path>
</svg>

<h1 class="w3-margin w3-jumbo w3-text-black";><b>Java Tutorials</b></h1>

<p class="w3-text-grey">Java is a heavily object oriented, staticall-typed language. It is an incredibly common programming language and can create many programs ranging from mobile games, to big data processing. To run Java programs you will need to install the Java Runtime Environment, which includes the Java Virtual Machine which is what runs the bytecode produced by the compiler. To write Java code you will need to install the Java Development Kit which includes the JRE and JVM, this can be installed <a href = ""> here </a>. </p>
<p class="w3-text-grey">It is recommended that beginners start with 'Output functions' and work through the tutorials below:</p>

<ol>

    <li><a href = "activityPage.php?topic=Output&lang=J">Output functions</a></li>
    <li><a href = "activityPage.php?topic=Data Types&lang=J">Data Types</a></li>
    <li><a href = "activityPage.php?topic=If Else&lang=J">Branching with If/Else</a></li>
    <li><a href = "activityPage.php?topic=Case Switch&lang=J">Branching with Case Switch</a></li>
    <li><a href = "activityPage.php?topic=While&lang=J">Looping with While</a></li>
    <li><a href = "activityPage.php?topic=For&lang=J">Looping with For</a></li>
    <li><a href = "activityPage.php?topic=Functions&lang=J">Creating functions</a></li>
    <li><a href = "activityPage.php?topic=Objects&lang=J">Objects and Classes</a></li>
    <li><a href = "activityPage.php?topic=Encapsulation&lang=J">Encapsulation</a></li>
    <li><a href = "activityPage.php?topic=Inheritance&lang=J">Inheritance</a></li>
    <li><a href = "activityPage.php?topic=Polymorphism&lang=J">Polymorphism</a></li>

    <p class="w3-text-grey"> Once you understand the basics why not try out a small project. <a href = "#">Here</a> we will teach you how to build a [PLACEHOLDER] from scratch.</p>


</ol>
<div class="w3-container w3-blue w3-center w3-padding-64">
    <footer class="w3-container w3-center w3-padding-100 w3-blue">
        <div class="w3-container w3-padding-100">
            <a class="w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left" href="quiz.php" style="font-size:17px;margin-top:-9px;margin-top:-9px" title="Quizzes">QUIZZES</a>
            <a class="w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left" href="/exercises/index.php" style="font-size:17px;margin-top:-9px;margin-left:12px" title="Exercises">EXERCISES</a>
            <a class="w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left" href="/exercises/index.php" style="font-size:17px;margin-top:-9px;margin-left:12px" title="Tutorials">TUTORIALS</a>
            <a class="w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left" href="/exercises/index.php" style="font-size:17px;margin-top:-9px;margin-left:12px" title="Mini Games">MINI-GAMES</a>
            <a class="w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left" href="/exercises/index.php" style="font-size:17px;margin-top:-9px;margin-left:12px" title="Contact Us">CONTACT US</a>
            <a class="w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left" href="#about us" style="font-size:17px;margin-top:-9px;margin-left:12px" title="About Us">ABOUT US</a>
        </div><br><br><br><br>
        <p class="w3-medium w3-text-white">
            The comprehensive and cutting-edge website Arc Code was created to offer those wishing to improve their skills and knowledge with high-quality education, training, and mini-games.<br>Arc Code provides a comprehensive selection of tutorials and courses in Java and Python.<br>Students can learn whenever and wherever they want because of the website’s accessibility and ease of use.<br>It is designed to make it a more friendly experience by having mini-games built into the website.</p></footer>
</div>


</body>

</html>