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
                <a href = 'login.html'>
                <button class = 'button-blue'>Log in</button>
                </a>
                <a href = 'register.html'>
                <button class = 'button-dark'>Register</button>
                </a>

                ");
            }
            ?>
        </div>
    </div>
    
    <div class = 'title-section' style = 'background-color: #0099ff;'>
        <div class = 'title'>Java</div>
    </div>

    <svg width="100%" height="200" viewBox="5 10 100 100" preserveAspectRatio="none">
        <path id="wavepath" d="M0,0 L110,0C35,150 35,0 0,100z" fill="#0099ff"></path>
    </svg>

    <div class = "info-section"> 

        <img src = "../images/java.png">
        
        <div>

            Java is a very common, object-oriented language. 
            It is used to create many different types of programs from mobile games to big data processing.
            To run java programs you need a Java Runtime Environment, to write Java programs you will need a Java Development Kit, 
            the lastest version of which can be installed <a href = "https://www.python.org/downloads/">here</a>

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