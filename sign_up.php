<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: black;
        }

        form {
            background: radial-gradient(lightblue, blue);
            padding: 10px;
            display: flex;
            flex-direction: column;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(221, 34, 34, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
            margin: auto;
            margin-top: 10%;
        }

        form label {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        form input[type="text"],
        form input[type="number"] {
            text-align: left;
            width: 70%;
            border: none;
            margin: auto;
            border-radius: 10px;
        }

        form input[type="submit"] {
            width: 30%;
            margin: auto;
            background-color: #4e96ef;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 3px 20px;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        a.login-link {
            display: inline-block;
            margin-top: 10px;
            width: 30%;
            margin: auto;
            padding: 3px 20px;
            background-color: #4e96ef;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a.login-link:hover {
            background-color: #45a049;
        }
    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
</head>

<body>
    <form action="signup_process.php" method="post">
        <h1>SIGN UP</h1>
        <label for="name">NAME <input type="text" name="name" required /></label><br>
        <label for="email">EMAIL <input type="text" name="email" required /></label><br>
        <label for="password">PASSWORD <input type="number" name="password" required /></label><br>
        <div class="button-container">
            <input type="submit" value="Sign Up" />
            <a href="login.php" class="login-link">Login</a>
        </div>
    </form>
</body>

</html>
