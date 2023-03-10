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
<link rel='icon' href='images\h.png' type='image/x-icon'>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: 'Lato', sans-serif}
.w3-bar,h1,button {font-family: 'Montserrat', sans-serif}
.fa-anchor,.fa-coffee,h1 {font-size:200px}
</style>
</head>
<body>
    <head>
                <title>CSS Basics</title>
                <link rel='stylesheet' href='home.css'>
            </head>
<!-- Navbar -->
<div class='w3-top'>
    <div class='w3-bar w3-blue w3-card w3-left-align w3-large w3-solid'>
      <a class='w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-blue' href='javascript:void(0);' onclick='myFunction()' title='Toggle Navigation Menu'><i class='fa fa-bars'></i></a>
<a href='EduCode1.php' class='w3-bar-item w3-button w3-text-black'><i class=''></i><b>Home</b></a>
<a href='Java.html' class='w3-bar-item w3-button w3-hide-small w3-text-black'><i class=''></i><b>Java</b></a>
<a href='Python.html' class='w3-bar-item w3-button w3-hide-small w3-text-black'><i class=''></i><b>Python</b></a>
<?php session_start(); if($_SESSION['id']>0){
    echo("<a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-right' href='php/profile.php' title='Exercises'>View Your Profile</a>");
    }
    else{
      echo("<a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-right' href='signin.html' title='Exercises'>Sign In</a>");
    } ?>
</div>

  <!-- Navbar on small screens -->
  <div id='navDemo' class='w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large'>
    <a href='EduCode1.php' class='w3-bar-item w3-button w3-text-black'><i class=''></i><b>Home</b></a>
    <a href='Java.html' class='w3-bar-item w3-button w3-hide-small w3-text-black'><i class=''></i><b>Java</b></a>
    <a href='Python.html' class='w3-bar-item w3-button w3-hide-small w3-text-black'><i class=''></i><b>Python</b></a>

    <?php session_start(); if($_SESSION['id']>0){
    echo("<a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-right' href='profile.php' title='Exercises'>View Your Profile</a>");
    }
    else{
      echo("<a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-right' href='signin.html' title='Exercises'>Sign In</a>");
    } ?>
    <!--CHANGES BUTTON FROM SIGN IN TO PROFILE BUTTON-->
  </div>
</div>

<!-- Header -->
<header class='w3-container w3-blue w3-center w3-bar-block' style='padding:250px 20px'>
  <h1 class='w3-margin w3-jumbo w3-text-black';><b>Arc Code</b></h1>
  <p class='w3-xlarge w3-text-black'><b>Learn Java & Python!!!</b></p><br>
  <a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-center' href='/exercises/index.php' style='font-size:17px;margin-top:-9px;margin-left:12px' title='Exercises'>Get Started</a>
</header>
<svg style='background-color: rgb(255, 255, 255) color w3-blue ;' width='100%' height='200' viewBox='5 10 100 100' preserveAspectRatio='none'>
<path id='wavepath' d='M0,0 L110,0C35,150 35,0 0,100z' fill='#2894f4'></path>
</svg>

<!-- First Grid -->
<div class='w3-row-padding w3-padding-64 w3-container' id='about us'>
  <div class='w3-content'>
    <div class='w3-twothird'>
      <h2>About Us</h2>
      <p class='w3-text-grey'>Arc Code is here to help beginner and intermediate programmers, it can teach you the skills you need to program in Java and Python from the ground up. Each topic explains how and when you use various programming concepts, then you are provided with the opportunity to demonstrate the new information you have learned through fill-in-the-gap coding activities.</p>
    </div>
    <div class='w3-third w3-center'>
      <img src='images\logo.png' alt='Logo' style='width:250px;height:250px;'>
    </div>
    </div>
  </div>
</div>
<!-- Second Grid -->
<div class='w3-row-padding w3-light-grey w3-padding-64 w3-container'>
  <div class='w3-content'>
    <div class='w3-third w3-center'>
      <i class='fa fa-coffee w3-padding-64 w3-text-blue w3-margin-right' style='width:250px;height:250px;'></i>
    </div>

    <div class='w3-twothird'>
      <h2>Why Us?</h2>
      <p class='w3-text-grey'>Practical application of programming skills is the most effective way to learn to code, which is why Arc Code provides many opportunities to put concepts to use in fill-in-the-blank activies. Users are provided feedback on which areas of their answer are wrong through clear error messages, to teach users how to read them effectively and encourage the users to correct their own code. Additionally, as Python and Java are two of the most popular languages used by programmers today, with 48% and 33% of marketshare respectfully, being familiar with these particular languages gives our users the best start to programming we can give them.<br>
        We carefully tailors the learning experience to the user, through the use of checkpoint tests which the user can take at anytime to recieve reccommendations on topics they can work on. When the user first opens the site they can either take an aptitude test, and be given specialised topics to revise and practise or they can start learning their chosen language from scratch. The activities the users has completed are stored on their profile for them to view topics they have struggled on, and identify areas for improvement on their own if they wish.</p>
    </div>
  </div>
</div>
<div class='w3-container w3-black w3-center w3-padding-64'>
<img src='images\how-spaces-works3.png' class='w3-hide-medium w3-hide-small w3-center' style='max-width:45%; margin:auto auto 25px auto;' loading='lazy'>
</div>
<div class='w3-container w3-blue w3-center w3-padding-64'>
  <footer class='w3-container w3-center w3-padding-100 w3-blue'>
    <div class='w3-container w3-padding-100'>
      <a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left' href='quiz.html' style='font-size:17px;margin-top:-9px;margin-top:-9px' title='Quizzes'>QUIZZES</a>
      <a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left' href='/exercises/index.php' style='font-size:17px;margin-top:-9px;margin-left:12px' title='Exercises'>EXERCISES</a>
      <a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left' href='/exercises/index.php' style='font-size:17px;margin-top:-9px;margin-left:12px' title='Tutorials'>TUTORIALS</a>
      <a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left' href='/exercises/index.php' style='font-size:17px;margin-top:-9px;margin-left:12px' title='Mini Games'>MINI-GAMES</a>
      <a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left' href='/exercises/index.php' style='font-size:17px;margin-top:-9px;margin-left:12px' title='Contact Us'>CONTACT US</a>
      <a class='w3-button w3-black w3-hide-small w3-round w3-hide-medium w3-left' href='#about us' style='font-size:17px;margin-top:-9px;margin-left:12px' title='About Us'>ABOUT US</a>
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