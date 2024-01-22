<!DOCTYPE html>
<html>

<head>
    <title>Test yourself with a quiz! - edu:Code</title>

    <link rel = 'stylesheet' href = "../css/main.css">
    <link rel = 'stylesheet' href = '../css/quiz.css'>

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

        <!-- Title : Quiz -->
        <!-- Java button Python toggle -->

        <form id = "quiz-selector"> 

            <h3> Which language are you learning? </h3>

                <span>
                    <label for = "language">Java</label>
                    <input type = "radio" name = "language" value = "J">

                    <input type = "radio" name = "language" value = "P">
                    <label for = "language">Python</label>
                </span>

                <p id = "warning"></p>

            <button type = "button" class = "button-dark" onclick = "quizSelect();"> Take Quiz!</button>

        </form>

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

    <script src = "../js/quiz.js"></script>

    <script type = "text/javascript"> 

        var currentQuestion = 0;
        var score = 0;

        function nextQuestion(){

            let question = document.getElementById("question-"+ currentQuestion);

            // All radio answers for that question
            var options = document.getElementsByName("answer"+currentQuestion);
            var givenAnswer = null;

            // Find the radio button that is checked
            // TODO: check what happens to score when no radio button pressed
            for(var i = 0; i < options.length; i++){
                if(options[i].checked){
                    if(question.dataset.answer == options[i].value){
                        score++; // If answer in checked box is correct, increment score
                    }
                }
            }

            question.style.display = "none"; // Remove question after checking
            currentQuestion++; // Increment question number

            if(document.getElementById("question-"+ (currentQuestion)) == null){ // If button pressed on last question (i.e no next question) --> submit results

                document.getElementById("next-button").style.display = "none";

                var lang = document.getElementById("quiz-wrapper").dataset.language;
                window.location = "quizresults.php?score="+score+"&lang="+lang+"&q="+ DEFAULT_QUANTITY;
                return false;
            }

            // If current question is the last question, change button text to "Finish Quiz"
            if(document.getElementById("question-"+ (currentQuestion + 1)) == null){
                // Change button text
                document.getElementById("next-button").innerText = "Finish Quiz";

            }

            document.getElementById("question-"+currentQuestion).style.display = "inline"; // Display next question

        }

    </script>

</body>   
</html>