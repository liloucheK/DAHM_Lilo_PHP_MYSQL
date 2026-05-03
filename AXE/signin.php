<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="signin.css">
</head>
<body>
    <div class="wrapper">
        <h1>Register Now !</h1>
        <!-- FORM INSCRIPTION -->
        <form action="" method="POST">
            <div>
                <input type="text" name="pseudo" placeholder="Name" required>
            </div>
            <div>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <!-- <div>
                <input type="password" name="repeat-password" id="repeat-password-input" placeholder="Mot de Passe" required>
            </div> -->
            <button type="submit" name="signin">Register</button>
        </form>
        <p>Already have an Account ? <a href="login.php">Log In !</a></p>
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
try{
    $pdo = new PDO('mysql:host=localhost;dbname=axe', 'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie !";
} catch (PDOException $e){
    die("Erreur : " . $e->getMessage());
}



//Si le bouton actif : récupération des données du form
if (isset($_POST['signin'])) {
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    echo"SIGBI";
//vérification que l'email n'existe pas déjà dans la db 
$checkEmail = $pdo->query("SELECT email FROM users WHERE email = '$email'");
if ($checkEmail->rowCount() > 0) {
    echo "erreur";
    $_SESSION['register_error'] = 'Email déjà utilisé !';
    exit();
    } else {
        //insertion des infos dans la db
        $pdo->query("INSERT INTO users (pseudo, email, password) VALUES ('$pseudo', '$email', '$password')");
    }
//redirection vers la connexion au compte
header("Location: login.php");
exit();

}




?>