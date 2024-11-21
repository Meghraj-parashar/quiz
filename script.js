let questions = [];
let currentQuestionIndex = 0;
let selectedOption = null;
let score = 0;
let currentTimer = null; // Add variable to track current timer

// Fetch questions from the server
async function fetchQuestions() {
    try {
        const response = await fetch('get_questions.php');
        questions = await response.json();
        displayQuestion();
        startTimer(); // Start timer after questions are loaded
    } catch (error) {
        console.error('Error fetching questions:', error);
    }
}

function displayQuestion() {
    if (currentQuestionIndex < questions.length) {
        const question = questions[currentQuestionIndex];
        document.getElementById('question').textContent = currentQuestionIndex + 1 + ". " + question.question_text;
        const buttons = document.querySelectorAll('.option-btn');
        buttons.forEach((btn, index) => {
            btn.textContent = question['option' + (index + 1)];
            btn.style.backgroundColor = '#f0f0f0';
        });
        document.getElementById('next-btn').disabled = true;
        selectedOption = null;
    } else {
        document.getElementById('quiz').innerHTML = '<h2>Quiz Completed! Your score is ' + score + ' out of ' + questions.length + '.</h2>';
        document.getElementById('next-btn').style.display = 'none';
    }
}

function selectOption(option) {
    selectedOption = option;
    const buttons = document.querySelectorAll('.option-btn');
    buttons.forEach((btn, index) => {
        btn.style.backgroundColor = index + 1 === option ? '#d0e8f2' : '#f0f0f0';
    });
    document.getElementById('next-btn').disabled = false;
}

function nextQuestion() {
    if (selectedOption == questions[currentQuestionIndex].correct_option) {
        score++; // Increment score if the selected option is correct
    }
    currentQuestionIndex++;
    displayQuestion();

    // Clear existing timer before starting new one
    if (currentTimer) {
        clearInterval(currentTimer);
    }
    startTimer();
}

fetchQuestions();

// let timeLeft = 60;
const timerElement = document.getElementById('timer');

function startTimer() {
    if (currentTimer) {
        clearInterval(currentTimer);
    }

    timeLeft = 60; // Ensure timeLeft is reset here as well
    currentTimer = setInterval(() => {
        if (timeLeft <= 0) { // Changed from -1 to 0
            clearInterval(currentTimer);
            nextQuestion();
        } else {
            timerElement.value = timeLeft;
            timeLeft--;
        }
    }, 1000);
}

// Remove this event listener since we're starting timer after questions load
// document.addEventListener('DOMContentLoaded', () => {
//     startTimer();
// });
