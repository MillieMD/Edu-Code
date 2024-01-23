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

    // Get questions json file
    let response = await fetch("../js/quiz.json");
    response = await response.json();

    // Shuffle questions, so they aren't the same ones on every quiz
    let questions = response[language].sort((a, b) => 0.5 - Math.random()); 

    // Create wrapper element for questions to reside in
    const quizWrapper = document.createElement("form");
    quizWrapper.setAttribute("action", "quizresults.php");
    quizWrapper.setAttribute("method", "POST");
    quizWrapper.dataset.language = language;
    quizWrapper.id = "quiz-wrapper";
    quizWrapper.classList.add("quiz-wrapper");

    // Put wraper on end, then put footer on the end (deletes + reapplies/moves old footer)
    document.body.append(quizWrapper);
    document.body.append(document.getElementById("footer")); // Should only ever be one footer per page

    // Add questions to quiz wrapper
    for(i = 0; i < numOfQuestions && i < questions.length; i++){

        let currentQuestion = questions[i];

        // Question number = i+1
        // Question = currentQuestion.question

        const e = document.createElement("div");
        e.classList.add("quiz-question");
        e.id = "question-" + i; // Id for navigating between questions
        e.dataset.answer = currentQuestion["answers"][0];
        e.dataset.topic = currentQuestion["topic"];
        e.dataset.answered = 0; // 0 for false: not answered, 1 for true: answered

        // Hide all but first questions
        if(i > 0){
            e.style.display = "none";
        }

        // Format of e:
        /* <h4> i. question?

            <label>
            <radio button>

            <label>
            <radio button>

            ...
        
        */
       
        let title = document.createElement("div");
        title.classList.add("question");

        title.insertAdjacentHTML("afterbegin", "<h5> " + (i+1) + "</h5>"); // Quiz number
        title.insertAdjacentHTML("beforeend", "<h6> " + currentQuestion["question"] + "</h6>") // Quiz question

        e.append(title);

        let answers = currentQuestion["answers"].sort((a, b) => 0.5 - Math.random()); // Shuffle array so correct answer != answers[0]

        quizWrapper.append(e);

        // Add a radio button for each answer (with appropriate label)
        for(j = 0; j < answers.length; j++){

            let q = document.createElement("div");
            q.classList.add("answer-option");

            // Answer radio button
            let a = document.createElement("input");
            a.setAttribute("type", "radio");
            a.setAttribute("name", "answer" + i);
            a.value = answers[j];
            
            // Answer label
            let l = document.createElement("label");
            l.setAttribute("for", "answer"+ i);
            l.innerHTML = answers[j];

            q.append(a);
            q.append(l);

            e.append(q);
        }
        
    }

    // Button to navigate to next question
    let next = document.createElement("button");
    next.classList.add("button-dark");
    next.setAttribute("type", "button");
    next.setAttribute("onclick", "nextQuestion()"); // Function written in quizselect.php
    next.innerHTML = "Next Question";
    next.id = "next-button";

    quizWrapper.append(next);

}