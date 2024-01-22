<!DOCTYPE html>
<html>

<head>
    <link rel = 'stylesheet' href = "css/main.css">
    <link rel= 'icon' href='images/logodark.png' type='image/x-icon'>

    <title>edu:Code - Learn to program in Python and Java</title>
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
    
        <div class = 'title-section' style = 'max-width: 100%;'>
            <h1 style = "padding: 8vw;">{edu:Code}</h1>
            <button class = "button-dark"> Start Learning </button>
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

    </main>

    <footer>
        <nav>
            <a href = "pages/quizselect.php"><button class = "button-light"> Take a Quiz </button></a>
            <a href = "pages/projectselect.php"><button class = "button-light"> Project Tutorials </button></a>
            <a href = "pages/contact.php"><button class = "button-light"> Contact Us </button></a>
            <a href = "pages/about.php"><button class = "button-light"> About Us </button></a>
        </nav>

        <p> edu:Code is here to help you learn to code in Python and Java, regardless of your experience. 
        <br> Get started today! </p>

    </footer>

</body>   
</html>