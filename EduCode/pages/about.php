<!DOCTYPE html>
<html>

<head>
    <link rel = 'stylesheet' href = "../css/main.css">
    <link rel= 'icon' href='../images/logodark.png' type='image/x-icon'>
    <title> About us - edu:Code </title>
</head>

<body>

<a class = "skip-link" href = "#main" tabindex = "0"> Skip to main content </a>
    
<header>
        <nav id = "site-nav">
            <ul>
                <li> <a href = "index.php">Home</a> </li>
                <li> <a href = "pages/java.php">Java</a> </li>
                <li> <a href = "pages/python.php">Python</a> </li>
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
                    <li> <a href = 'pages/login.html'>Log in</a> </li>
                    <li> <a href = 'pages/register.html'>Register</a> </li>
                </ul>

                ");
            }
            ?>
        </nav>
    </header>

    <main id = "main">
    
    <div class = 'title-section' style = 'background-color: #0099ff;'>
        <div class = 'title'>About edu:Code</div>
    </div>

    <svg width="100%" height="200" viewBox="5 10 100 100" preserveAspectRatio="none">
        <path id="wavepath" d="M0,0 L110,0C35,150 35,0 0,100z" fill="#0099ff"></path>
    </svg>

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

</body>   
</html>