//I've never written JS before kyle fix this soon as poss thanks
//might needsto use AJAX so that the page isnt refreshed bc then it will lose the form data i believe?

//answers are now stored in a comma seperated list
//btw it will always work out that the number of elements in the list for the answer is the number of boxes

//for i = 0 -> length of answer list: answer = box i?

let activity = document.getElementById('FITG');
const answer = activity.getAttribute('data-value').split(",");

for(let i = 0; i < answer.length(); i++ ){
    let currBox = document.getElementById("box" + i);
    if(currBox == answer[i]){
        //correct
        currBox.style.color = "green";
    }else{
        //wrong
        currBox.style.color = "green";
    }
}

