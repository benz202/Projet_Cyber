<?php
session_start();
$token = $_SESSION['token'] ?? ''; 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #333;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 280px; 
            max-width: 100%; 
            margin: 0 auto;
            overflow: hidden;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input, input[type="submit"], input[type="reset"] {
            width: calc(100% - 16px); 
            padding: 6px; 
            margin-bottom: 8px; 
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 12px; 
        }

        input[type="submit"], input[type="reset"] {
            background-color: #ff0000;
            color: #333;
            cursor: pointer;
            margin-bottom: 12px; 
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #ff0000;
        }
    </style>
</head>


<body>
    <form method="POST" action="traitement_connexion.php" onsubmit="return validateForm()" >

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="Your email..." required>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" placeholder="Your passeword" required>

        <label for="confirme">Confirmer le mot de passe :</label>
        <input type="password" id="Confirm" name="confirme"placeholder="Re tapez votre mot de passe..." required>

        <input type="submit" value="Sign up" name="ok">
        <input type="reset" value="Reset" name="reset">
    </form>

</body>
</html>