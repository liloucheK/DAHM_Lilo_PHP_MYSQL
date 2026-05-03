<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="signin.css">
</head>
<body>
    <div class="wrapper">
        <h1>Log In</h1>
        <!-- FORM CONNEXION -->
        <form id="form" action="" method="POST">
            <div>
                <label for="email-input">
                    
                </label>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <label for="password-input">
                    
                </label>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Log In</button>
        </form>
        <p>Don't have an Account ? <a href="signin.php">Register !</a></p>
    </div>
</body>
</html>

<?php

session_start();
//Si la seesion est déjà ouverte = redirection au compte
if (isset($_SESSION["user_id"])) {
    header("Location: account.php");
    exit;
}

//appel de la db
try {
    $pdo = new PDO('mysql:host=localhost;dbname=axe', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}


//si POST nettoie email + mdp
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    //vérifie la validité de l'email (@ .smth)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "email invalide";
        exit;
    }

//vérifie les champs et prépare la requête pour le mdp
    if (!empty($email) && !empty($password)) {
        $stmt = $pdo->prepare("SELECT id, email, password FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        //vérifie le mdp et démarre la session
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            //redirection à la page du compte
            header("Location: account.php");
            exit();
        } else {
            echo "Email ou mot de passe incorrect.";
        }
    }

}



?>