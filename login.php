<?php

session_start();

if (isset($_SESSION["user_id"])) {
    header("Location: acceuil.php");
    exit;
}

try {
    $pdo = new PDO('mysql:host=localhost;dbname=exercice_login', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}



if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "email invalide";
        exit;
    }


    if (!empty($email) && !empty($password)) {
        $stmt = $pdo->prepare("SELECT id, email, mot_de_passe FROM utilisateurs WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($password, $user['mot_de_passe'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            header("Location: acceuil.php");
            exit;
        } else {
            echo "Email ou mot de passe incorrect.";
        }
    }


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Mot de Passe :</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Se connecter</button>
    </form>
</body>

</html>