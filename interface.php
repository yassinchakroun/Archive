<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Glassmorphism</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #1e3c72, #2a5298);
        }

        .login-container {
            width: 380px;
            padding: 40px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            color: white;
        }

        .login-container h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .input-box {
            width: 100%;
            margin: 12px 0;
            padding: 12px;
            border: none;
            border-bottom: 2px solid white;
            background: transparent;
            color: white;
            font-size: 16px;
            outline: none;
        }

        .input-box::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .btn {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            border-radius: 30px;
            border: none;
            background: rgba(255, 255, 255, 0.3);
            color: white;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: rgba(255, 255, 255, 0.6);
        }

        .forgot {
            margin-top: 12px;
            font-size: 14px;
            color: white;
        }

        .forgot a {
            color: #ffd700;
            text-decoration: none;
            font-weight: 500;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Connexion</h2>
        <input type="text" class="input-box" placeholder="Nom d'utilisateur">
        <input type="password" class="input-box" placeholder="Mot de passe">
        <button class="btn">Se connecter</button>
        <p class="forgot">Mot de passe oublié ? <a href="#">Cliquez ici</a></p>
    </div>

</body>
</html>
