<!DOCTYPE html>
<html>

<head>
    <link rel = 'stylesheet' href = "../css/main.css">
    <link rel= 'icon' href='../images/logodark.png' type='image/x-icon'>
</head>

<body>

    <div class = 'header'>

        <div class = 'header-left'>

            <a href = "../index.php"><button class = "button-blue">Home</button></a>

            <a href = "java.php"><button class = "button-blue">Java</button></a>

            <a href = "python.php"><button class = "button-blue">Python</button></a>

        </div>  

        <div class = 'header-right'>


            <!-- If user logged in, link to profile, else give options to sign in or sign up -->

            <?php
            session_start();

            if($_SESSION["user_id"] === null){
                $_SESSION["user_id"] = 0;
            }

            if($_SESSION["user_id"] > 0){

                echo("
                <a href = '#'>
                <button class = 'button-dark'>Profile</button>
                </a>
                ");

            } else{

                echo(" 
                <a href = 'pages/login.html'>
                <button class = 'button-blue'>Log in</button>
                </a>
                <a href = 'pages/register.html'>
                <button class = 'button-dark'>Register</button>
                </a>

                ");
            }
            ?>
        </div>
    </div>

    <?php
    
            require_once "../php/connect_db.php";

            start_session();

            
    
    
    ?>


    <div class = "footer" id = "footer">

        <a href = "quizselect.php"><button class = "button-light"> Take a Quiz </button></a>
        <a href = "projectselect.php"><button class = "button-light"> Project Tutorials </button></a>
        <a href = "contact.php"><button class = "button-light"> Contact Us </button></a>
        <a href = "about.php"><button class = "button-light"> About Us </button></a>

        <p> edu:Code is here to help you learn to code in Python and Java, regardless of your experience. 
           <br> Get started today! </p>

    </div>

    <script src = "../js/quiz.js"> </script>

</body>   
</html>