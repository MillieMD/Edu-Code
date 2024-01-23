<!DOCTYPE html>
<html>

<head>
    <link rel = 'stylesheet' href = "../css/main.css">
    <link rel= 'icon' href='../images/logodark.png' type='image/x-icon'>
    <title> Learn Python with edu:Code </title>
</head>

<body>

    <div class = 'header'>

        <div class = 'header-left'>

            <a href = "../index.php"><button class = "button-blue"><h5>Home</h5></button></a>

            <a href = "java.php"><button class = "button-blue"><h5>Java</h5></button></a>

            <a href = "python.php"><button class = "button-blue"><h5>Python</h5></button></a>

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
                <button class = 'button-dark'><h5>Profile</h5></button>
                </a>
                ");

            } else{

                echo(" 
                <a href = 'login.html'>
                <button class = 'button-blue'><h5>Log in</h5></button>
                </a>
                <a href = 'register.html'>
                <button class = 'button-dark'><h5>Register</h5></button>
                </a>

                ");
            }
            ?>
        </div>
    </div>
    
    <div class = 'title-section'>
        <div class = 'title'>Python</div>
    </div>

    <svg width="100%" height="200" viewBox="5 10 100 100" preserveAspectRatio="none">
        <path id="wavepath" d="M0,0 L110,0C35,150 35,0 0,100z" fill="#0099ff"></path>
    </svg>

    <div class = "info-section"> 

        <img src = "../images/python.png">
        
        <div>

            Python is quickly becoming one of the most important programming languages. 
            It is easy to learn and very powerful once mastered. To begin learning Python all you need is a compatible version of Python installed.
            The lastest version can be installed <a href = "https://www.python.org/downloads/">here</a>

        </div>
    
    </div>

    <div class = "footer">

        <a href = "quizselect.php"><button class = "button-light"> Take a Quiz </button></a>
        <a href = "projectselect.php"><button class = "button-light"> Project Tutorials </button></a>
        <a href = "contact.php"><button class = "button-light"> Contact Us </button></a>
        <a href = "about.php"><button class = "button-light"> About Us </button></a>

        <p> edu:Code is here to help you learn to code in Python and Java, regardless of your experience. 
           <br> Get started today! </p>

    </div>

</body>   
</html>