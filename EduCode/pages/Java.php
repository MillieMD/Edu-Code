<!DOCTYPE html>
<html>

<head>
    <title> Learn Java with edu:Code </title>

    <link rel = 'stylesheet' href = '../css/main.css'>
    <link rel= 'icon' href='../images/logodark.png' type='image/x-icon'>
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

    <div style = "display: flex; flex-direction: row;">

        <div class = "side-bar"> 

                <p> Tutorials </p>

                <span><a href = "#"> Topic 0 </a></span>
                <span><a href = "#"> Topic 0 </a></span>
                <span><a href = "#"> Topic 0 </a></span>
                <span><a href = "#"> Topic 0 </a></span>
        </div>

        <div class = "main-content">

            <div class = 'title-section' style = 'background-color: #0099ff;'>
                <div class = 'title'>Python</div>
            </div>

            <svg width="100%" height="200" viewBox="5 10 100 100" preserveAspectRatio="none">
                <path id="wavepath" d="M0,0 L110,0C35,150 35,0 0,100z" fill="#0099ff"></path>
            </svg>

            <!-- Information -->
            <!-- Try quiz button -->

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