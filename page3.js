function checkAnswers(){
    // The following is what I changed.
    Student_answer = document.querySelector('[name="write here"]').value
    Teacher_answer ="usa"

    if (Student_answer.length === 0 || Teacher_answer.length === 0) {
        alert("You must enter an answer to continue...");
        return false;
    }

    if (Student_answer === Teacher_answer) {
        alert("CONGRATULATIONS! Your answer is correct! You have advanced to the next level.");
        document.body.innerHTML += '<button onclick="window.location.href = \'https://www.google.com\';">Next Riddle</button>'
        //NOTE: here is where the button should be activated and click on it to advance to an hyperlink 
    } else {
        alert("Wrong answer, please, keep trying...");
        //NOTE: here the button must be disabled
    }

}

