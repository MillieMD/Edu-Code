<!DOCTYPE html>
<html>

<head>
    <link rel = 'stylesheet' href = "css/main.css">
    <link rel= 'icon' href='images/logodark.png' type='image/x-icon'>

    <title>edu:Code - Learn to program in Python and Java</title>
</head>

<body>

    <div class = 'header'>

        <div class = 'header-left'>

            <a href = "index.php"><button class = "button-blue"><h5>Home</h5></button></a>

            <a href = "pages/java.php"><button class = "button-blue"><h5>Java</h5></button></a>

            <a href = "pages/python.php"><button class = "button-blue"><h5>Python</h5></button></a>

        </div>  

        <div class = 'header-right'>

        <!-- If user logged in, link to profile, else give options to sign in or sign up -->

            <?php
            session_start();

            if(!isset($_SESSION["user_id"])){
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
                <a href = 'pages/login.html'>
                <button class = 'button-blue'><h5>Log in</h5></button>
                </a>
                <a href = 'pages/register.html'>
                <button class = 'button-dark'><h5>Register</h5></button>
                </a>

                ");
            }
            ?>
        </div>
    </div>
    
    <div class = 'title-section' style = ' max-width: 100%;'>
        <h1 style = "padding: 8vw;">{edu:Code}</h1>
        <button class = "button-dark"> <h5> Start Learning </h5> </button>
    </div>

    <svg width="100%" height="200" viewBox="5 10 100 100" preserveAspectRatio="none">
        <path id="wavepath" d="M0,0 L110,0C35,150 35,0 0,100z" fill="#007BFF"></path>
    </svg>

        <div class = "info-section">
        
            <div> 
                <h2> Why edu:Code? </h2>
                Practical application of programming skills is the most effective way to learn to code, 
                so we give you the chance to put lessons to use in fill-in-the-blank activies. 
                You are provided clear error messages, to teach you to debug and correct your own code. 
                <br> <br>
                We carefully tailor the learning experience to you, 
                through quizzes which the you can take at anytime to highlight your strengths and weaknesses,
                and a log of the activities you've completed to identify next steps.
            </div>

            <img src = "images/logolight.png">

        </div>


    <div class = "image-span" style = "background-color: #000000;">

        <img src = images/landingpage.png>

    </div>

    <div class = "footer">

        <a href = "pages/quizselect.php"><button class = "button-light"> Take a Quiz </button></a>
        <a href = "pages/projectselect.php"><button class = "button-light"> Project Tutorials </button></a>
        <a href = "pages/contact.php"><button class = "button-light"> Contact Us </button></a>
        <a href = "pages/about.php"><button class = "button-light"> About Us </button></a>

        <p> edu:Code is here to help you learn to code in Python and Java, regardless of your experience. 
           <br> Get started today! </p>

    </div>

</body>   
</html>