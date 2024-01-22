<!DOCTYPE html>
<html>

<head>
    <title> Learn Java with edu:Code </title>

    <link rel = 'stylesheet' href = '../css/main.css'>
    <link rel= 'icon' href='../images/logodark.png' type='image/x-icon'>
</head>

<body>

<a class = "skip-link" href = "#main" tabindex = "0"> Skip to main content </a>

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

    <main id = "main">

        <aside> 

                <h5 > Tutorials </h5>

                <nav>

                    <h6> The Basics </h6>

                    <ul>

                    <li> <a href = "#"> Getting started </a> </li>
                    <li> <a href = "#"> Operators </a> </li>
                    <li> <a href = "#"> Variables </a> </li>
                    <li> <a href = "#"> Data Types </a> </li>
                    <li> <a href = "#"> Strings </a> </li>
                    <li> <a href = "#"> If-Else </a> </li>
                    <li> <a href = "#"> While loops </a> </li>
                    <li> <a href = "#"> For Loops </a> </li>
                    <li> <a href = "#"> Switch Statements </a> </li>
                    <li> <a href = "#"> Arrays </a> </li>

                    </ul>

                    <h6> Methods </h6>

                    <ul>

                    <li> <a href = "#"> Methods </a> </li>
                    <li> <a href = "#"> Method Overriding </a> </li>
                    <li> <a href = "#"> Access Modifiers </a> </li>
                    <li> <a href = "#"> Testing </a> </li>

                    </ul>

                    <h6> Object Oriented Programming </h6>

                    <ul>

                    <li> <a href = "#"> Classes </a> </li>
                    <li> <a href = "#"> Encapsulation </a> </li>
                    <li> <a href = "#"> Inheritance </a> </li>
                    <li> <a href = "#"> Polymorphism </a> </li>
                    <li> <a href = "#"> Abstract Classes </a> </li>
                    <li> <a href = "#"> Interfaces </a> </li>

                    </ul>

                </nav>

                <h5> Projects </h5>

                <ul>

                <li> <a href = "#">  </a> </li>

                </ul>

        </aside>

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