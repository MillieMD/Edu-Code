<!DOCTYPE html>
<html>
<body>

<head>
    <link rel = 'stylesheet' href = "../../css/main.css">
    <link rel= 'icon' href='../../images/logodark.png' type='image/x-icon'>
</head>

<body>

<header>
        <nav>
            <ul>
                <li> <a href = "../index.php">Home</a> </li>
                <li> <a href = "java.php">Java</a> </li>
                <li> <a href = "python.php">Python</a> </li>
            </ul>
        </nav>  

        <div class = 'header-right'>
        <!-- If user logged in, link to profile, else give options to sign in or sign up -->
            <?php
            session_start();

            if(!isset($_SESSION["user_id"])){
                $_SESSION["user_id"] = 0;
            }

            if($_SESSION["user_id"] > 0){

                echo("
                <ul>
                    <li> <a href = '#'>Profile</a> </li>
                </ul>
                ");

            } else{

                echo(" 

                <ul>
                    <li> <a href = 'login.html'>Log in</a> </li>
                    <li> <a href = 'register.html'>Register</a> </li>
                </ul>

                ");
            }
            ?>
        </div>
    </header>

    <h3> Sorry, we have encountered a problem with our database. 
        Ensure you have typed everything correctly and try again, 
        however if problems persist contact the site manager </h3>

    <?php

    include "../../php/connect_db.php";

    echo("Error information:" .$db->connect_error);

    ?>

    <button class = "button-blue"> Home page </button>

    
    <footer>
        <nav>
            <a href = "quizselect.php"><button class = "button-light"> Take a Quiz </button></a>
            <a href = "projectselect.php"><button class = "button-light"> Project Tutorials </button></a>
            <a href = "contact.php"><button class = "button-light"> Contact Us </button></a>
            <a href = "about.php"><button class = "button-light"> About Us </button></a>
        </nav>

        <p> edu:Code is here to help you learn to code in Python and Java, regardless of your experience. 
        <br> Get started today! </p>

    </footer>


</body>
</html>