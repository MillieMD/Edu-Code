<!DOCTYPE html>
<html>

<head>
    <title> Learn Java with edu:Code </title>

    <link rel = 'stylesheet' href = '../css/main.css'>
    <link rel= 'icon' href='../images/logodark.png' type='image/x-icon'>
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

    <div style = >

        <div class = "side-bar"> 

                <h5 > Tutorials </h5>


                <h6> The Basics </h6>

                <a href = "#"> Getting started </a>
                <a href = "#"> Operators </a>
                <a href = "#"> Variables </a>
                <a href = "#"> Data Types </a>
                <a href = "#"> Strings </a>
                <a href = "#"> If-Else </a>
                <a href = "#"> While loops </a>
                <a href = "#"> For Loops </a>
                <a href = "#"> Switch Statements </a>
                <a href = "#"> Arrays </a>

                <h6> Methods </h6>

                <a href = "#"> Methods </a>
                <a href = "#"> Method Overriding </a>
                <a href = "#"> Access Modifiers </a>
                <a href = "#"> Testing </a>

                <h6> Object Oriented Programming </h6>

                <a href = "#"> Classes </a>
                <a href = "#"> Encapsulation </a>
                <a href = "#"> Inheritance </a>
                <a href = "#"> Polymorphism </a>
                <a href = "#"> Abstract Classes </a>
                <a href = "#"> Interfaces </a>

                <h5> Projects </h5>

                <a href = "#">  </a>

        </div>

        <div class = "main-content">

            <h1> Java </h1>

            <div class = "info-section">
                <div>
                    Java is one of the most popular programming languages. It is used in a range of use cases, from games development to big-data, by over 30% of developers across the globe.
                </div>

                <img src = "../images/java.png">
            </div>
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