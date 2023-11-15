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
    <link rel="icon" href="..\images\h.png" type="image/x-icon">
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
    <h1 class="w3-margin w3-jumbo w3-text-black";><b>Python</b></h1>
</header>
<svg style="background-color: rgb(255, 255, 255) color w3-blue ;" width="110%" height="200" viewBox="10 10 100 100" preserveAspectRatio="none">
    <path id="wavepath" d="M0,0 L110,0C35,150 35,0 0,100z" fill="#2894f4"></path>
</svg>

<h1 class="w3-margin w3-jumbo w3-text-black";><b>Python Tutorials:</b></h1>

<p class="w3-text-grey"> Python is a dynamic, interpreted language. This makes it easy for experienced and beginner programmers to use, with high efficiency. To beginning writing and running Python programs all you need is to have a compatible version of Python installed. The latest version can be installed <a href = "https://www.python.org/downloads/"> here </a> </p>
<p class="w3-text-grey"> Python can be used to create a wide variety of different, powerful programs however, it is recommended that beginners start with 'Print functions'.</p>

<ol>

    <li><a href = "activityPage.php?topic=Output&lang=P"> Print functions</a></li>
    <li><a href = "activityPage.php?topic=Data Types&lang=P"> Data Types</a></li>
    <li><a href = "activityPage.php?topic=Branching&lang=P"> Branching using "If/Else"</a></li>
    <li><a href = "activityPage.php?topic=While&lang=P"> Looping using "While" loops</a></li>
    <li><a href = "activityPage.php?topic=For&lang=P"> Looping using "For" loops</a></li>
    <li><a href = "activityPage.php?topic=Array&lang=P"> Arrays</a></li>
    <li><a href = "activityPage.php?topic=Functions&lang=P"> Creating your own functions</a></li>

</ol>

<p class="w3-text-grey"> Once you understand the basics why not try out a small project. <a href = "#">Here</a> we will teach you how to build a [PLACEHOLDER] from scratch.</p>


<div class="w3-container w3-blue w3-center w3-padding-64">
    <footer class="w3-container w3-center w3-padding-100 w3-blue">
        <div class="w3-container w3-padding-100">
        <a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left' href='java.php' style='font-size:17px;margin-top:-9px;margin-top:-9px' title='Java'>JAVA</a>
        <a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left' href='python.php' style='font-size:17px;margin-top:-9px;margin-left:12px' title='Python'>PYTHON</a>
        <a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left' href='quiz.php' style='font-size:17px;margin-top:-9px;margin-left:12px' title='Quizzes'>QUIZZES</a>
        <a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left' href='#' style='font-size:17px;margin-top:-9px;margin-left:12px' title='Projects'>PROJECTS</a>
        <a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left' href='../index.php#about us' style='font-size:17px;margin-top:-9px;margin-left:12px' title='About Us'>ABOUT US</a>
        </div><br><br><br><br>
        <p class="w3-medium w3-text-white">
            The comprehensive and cutting-edge website Arc Code was created to offer those wishing to improve their skills and knowledge with high-quality education, training, and mini-games.<br>Arc Code provides a comprehensive selection of tutorials and courses in Java and Python.<br>Students can learn whenever and wherever they want because of the website’s accessibility and ease of use.<br>It is designed to make it a more friendly experience by having mini-games built into the website.</p></footer>
</div>


</body>

</html>