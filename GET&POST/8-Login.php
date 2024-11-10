<?php
    if( isset($_POST["submit"])){
    if ($_POST["username"] == "admin" && $_POST["password"] == "123"){
            header("Location: 9-Admin.php");
            exit;
        } else{
            $error=true;
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
        }
        form {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
        h1 {
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            color: #333;
        }
        label {
            display: block;
            margin: 0.5rem 0 0.3rem;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 0.7rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        button {
            width: 100%;
            padding: 0.8rem;
            font-size: 1rem;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        p {
            color: red;
            font-weight: bold;
            margin: 0.5rem 0 1rem;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <h1>Login</h1>
        <?php if (isset($error)):?>
        <p>Username / Password SALAH!</p>
        <?php endif; ?>

        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <br>

        <button type="submit" name="submit">Login!</button>
    </form>
</body>
</html>