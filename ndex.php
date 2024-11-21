<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Website</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
    body {

        background-image: url('octa_bg.png'); /* Replace with your image path */
        background-size: cover; /* Ensures the image covers the entire background */
        background-repeat: no-repeat; /* Prevents the image from repeating */
    }
   
</style>


    </style>
</head>
<body>
    <div class="quiz-container">
<input value="" readonly id="timer" >

        <h1>Quiz Game</h1>
        <div id="quiz">
            <div id="question">Loading... </div>
            <div class="options">
                <button class="option-btn" onclick="selectOption(1)">Option 1</button>
                <button class="option-btn" onclick="selectOption(2)">Option 2</button>
                <button class="option-btn" onclick="selectOption(3)">Option 3</button>
                <button class="option-btn" onclick="selectOption(4)">Option 4</button>
            </div>
        </div>
        <button id="next-btn" onclick="nextQuestion()" disabled>Next</button>
    </div>
    <script src="script.js"></script>
</body>
</html>
