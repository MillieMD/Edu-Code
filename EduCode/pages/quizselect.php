<!DOCTYPE html>
<html>

<head>
    <title>Test yourself with a quiz! - edu:Code</title>

    <link rel = 'stylesheet' href = "../css/main.css">
    <link rel = 'stylesheet' href = '../css/quiz.css'>

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

    <div class = "footer" id = "footer">

        <a href = "quizselect.php"><button class = "button-light"> Take a Quiz </button></a>
        <a href = "projectselect.php"><button class = "button-light"> Project Tutorials </button></a>
        <a href = "contact.php"><button class = "button-light"> Contact Us </button></a>
        <a href = "about.php"><button class = "button-light"> About Us </button></a>

        <p> edu:Code is here to help you learn to code in Python and Java, regardless of your experience. 
           <br> Get started today! </p>

    </div>

    <script src = "../js/quiz.js"></script>

    <script type = "text/javascript"> 

        var currentQuestion = 0;
        var score = 0;

        function nextQuestion(){

            let question = document.getElementById("question-"+currentQuestion);

            var options = document.getElementsByName("answer"+(currentQuestion+1));
            var givenAnswer = null;

            for(var i = 0; i < options.length; i++){
                if(options[i].checked){
                    givenAnswer = options[i].value;
                }
            }

            if(question.dataset.answer == givenAnswer){
                score++;
            }

            question.style.display = "none";
            currentQuestion++;
            document.getElementById("question-"+currentQuestion).style.display = "inline";

            if(currentQuestion == DEFAULT_QUANTITY-2){
                // Change button text
                document.getElementById("next-button").innerText = "Finish Quiz";

            }

            if(currentQuestion == DEFAULT_QUANTITY-1){

                var lang = document.getElementById("quiz-wrapper").dataset.language;

                window.location = "quizresults.php?score="+score+"&lang="+lang;
            }
        }

    </script>

</body>   
</html>