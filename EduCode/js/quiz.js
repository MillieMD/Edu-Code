const DEFAULT_QUANTITY = 10;

function quizSelect(){

    const langElements = document.getElementsByName("language");

    let lang;

    for(let i = 0; i < langElements.length; i++){

        if(langElements[i].checked){
            lang = langElements[i].value;
            break;
        }

    }

    if(lang == null){
        document.getElementById("warning").innerHTML = "Please select a language";
    }else{
        document.getElementById("quiz-selector").remove();
        generateQuiz(lang);
    }

}

async function generateQuiz(language, numOfQuestions = DEFAULT_QUANTITY){

    // Get questions json
    let response = await fetch("../js/quiz.json");
    response = await response.json();

    let questions = response[language].sort((a, b) => 0.5 - Math.random());;

    // Create wrapper element for questions to reside in
    const quizWrapper = document.createElement("form");
    quizWrapper.setAttribute("action", "quizResults.php");
    quizWrapper.setAttribute("method", "POST");
    quizWrapper.classList.add("quiz-wrapper");

    // Put wraper on end, then put footer on the end (deletes/moves old footer)
    document.body.append(quizWrapper);
    document.body.append(document.getElementById("footer"));

    // Add questions to quiz wrapper
    for(i = 0; i < numOfQuestions && i < questions.length; i++){

        let currentQuestion = questions[i];

        // Question number = i+1
        // Question = currentQuestion.question

        const e = document.createElement("div");
        e.classList.add("quiz-question");
        e.dataset.answer = currentQuestion["answers"][0];
        e.dataset.topic = currentQuestion["topic"];

        // Format of e:
        /* <h4> i. question?

            <label>
            <radio button>

            <label>
            <radio button>
        
        */

        e.insertAdjacentHTML("afterbegin", "<h4> " + (i+1) + ". " + currentQuestion["question"] + "</h4>");
        let answers = currentQuestion["answers"].sort((a, b) => 0.5 - Math.random()); // shuffle array so correct answer != answers[0]

        quizWrapper.append(e);

        // Add a radio button for each answer (with appropriate label)
        for(j = 0; j < answers.length; j++){

            // Answer radio button
            let a = document.createElement("input");
            a.setAttribute("type", "radio");
            a.setAttribute("name", "question" + (i+1));
            
            // Answer label
            let l = document.createElement("label");
            l.setAttribute("for", "question"+ (i+1));
            l.innerHTML = answers[j];

            e.append(a);
            e.append(l);
        }
        
    }

    console.log("ESCAPED THE FORLOOP");
    quizWrapper.insertAdjacentHTML("beforeend", "<button type = 'submit' class = 'button-dark'> Submit Results </button>");

}