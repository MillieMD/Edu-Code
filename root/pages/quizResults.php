<!DOCTYPE html>
<html>

<head>
    <title>Test yourself with a quiz! - edu:Code</title>

    <link rel = 'stylesheet' href = "../css/main.css">
    <link rel= 'icon' href='../images/logodark.png' type='image/x-icon'>
</head>

<body>

<a class = "skip-link" href = "#main" tabindex = "0"> Skip to main content </a>

<header>
<nav id = "site-nav">
            <ul>
                <li> <a href = "../index.php">Home</a> </li>
                <li> <a href = "java.php">Java</a> </li>
                <li> <a href = "python.php">Python</a> </li>
            </ul>
        </nav>  

        <nav id = "account-actions">
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
        </nav>
    </header>

    <main id = "main">

    <?php

            $score = ($_GET["score"]/$_GET["q"] * 100);
    
            echo("<h4>");

            if($score < 20){
                echo("Better luck next time...");
            }elseif($score < 40){
                echo("Getting there!");
            }elseif($score == 50){
                echo("Wo-ah we're half way there!");
            }elseif($score < 60){
                echo("Nice effort!");
            }elseif($score < 80){
                echo("Well done!");
            }elseif($score < 99){
                echo("Amazing!");
            }else{
                echo("Perfect score!");
            }

            echo("</h4>");
    ?>

    <div id = "progress-bar"></div>

    <div class = "hor-flex"> 

            <?php
                echo("<h4>".$score."%</h4>");
                
            ?>

            <!-- Vertical divider -->

            <?php
            
                require_once "../php/connect_db.php";
               
                // If logged in, submit score to database, echo message saying score was saved
                if($_SESSION["userid"] > 0){

                    // ec_quizattempts has fields userID, datetime, score, language
                    $query = $db->prepare("INSERT INTO ec_quizattempts VALUES(? ? ? ?)");
                    $query->bind_param("isis", $_SESSION["userid"], time() ,$score, $_GET["lang"]);

                    // Helpful message, and button to view profile
                    echo("Quiz results saved. View now on your profile");
                    echo("<a href = '#'>
                        <button class = 'button-dark'><h5>Profile</h5></button>
                        </a>");

                }else{ // Else, prompt users to sign up to save their scores next time

                    echo("Log in or Register to save your scores next time:");

                    echo("<a href = 'login.html'>
                        <button class = 'button-blue'><h5>Log in</h5></button>
                        </a>
                        <a href = 'register.html'>
                        <button class = 'button-dark'><h5>Register</h5></button>
                        </a>");

                }


            
            ?>


    </div>

    </main>

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

    <script src = "../js/quiz.js"> </script>

</body>   
</html>