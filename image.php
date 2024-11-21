<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Page</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    background: linear-gradient(to bottom, #e0f7fa, #a7ffeb);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.quiz-container {
    background: #ffffff;
    border-radius: 20px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    padding: 30px 40px;
    max-width: 600px;
    width: 90%;
    position: relative;
}

.question-header {
    margin-bottom: 20px;
}

.question-header h2 {
    font-size: 1.5em;
    color: #333;
    margin-bottom: 10px;
}

.question-header p {
    font-size: 1em;
    color: #666;
}

.options-container {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.option {
    background: #f0f8f8;
    border: 2px solid #d4e6e6;
    padding: 15px;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
}

.option:hover {
    background: #e1f4f4;
    border-color: #b2e4e4;
}

.option.selected {
    background: #cdeeee;
    border-color: #8cdede;
}

.option input[type="radio"] {
    display: none;
}

.option span {
    margin-left: 10px;
    color: #333;
}

/* Decorative elements */
body::before,
body::after {
    content: "";
    position: absolute;
    width: 80px;
    height: 80px;
    background-image: url('path/to/banana.png'), url('path/to/bicycle.png'), url('path/to/plant.png');
    background-size: contain;
    background-repeat: no-repeat;
    z-index: -1;
    opacity: 0.8;
}

/* Adjustments for decorative placement */
body::before {
    top: 10%;
    left: 5%;
}

body::after {
    bottom: 15%;
    right: 10%;
}

    </style>
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>

<body>
    <div class="quiz-container">
        <div class="question-section">
            <h2>Question #1</h2>
            <p>Have you practiced sport or any physical activity out of your working schedule at least 15 min or more
                during the last month?</p>
        </div>
        <div class="options-section">
            <label class="option">
                <input type="radio" name="answer" value="1">
                <span>I did 1 time per week</span>
            </label>
            <label class="option">
                <input type="radio" name="answer" value="2">
                <span>I did 2 times per week</span>
            </label>
            <label class="option">
                <input type="radio" name="answer" value="3">
                <span>I did 3 times or more per week</span>
            </label>
            <label class="option">
                <input type="radio" name="answer" value="4">
                <span>I haven’t spent any time this month</span>
            </label>
        </div>
    </div>
</body>

</html>