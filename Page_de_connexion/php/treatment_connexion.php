<?php

$email = isset($_POST['email']) ? $_POST['email'] : '';
$mdp = isset($_POST['mdp']) ? $_POST['mdp'] : '';

$servname = 'localhost';
$dbname = 'jeu';
$user = 'User_Jeu';
$pass = 'password';

try {
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM Utilisateurs WHERE Email = :email";
    $stmt = $dbco->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $user = $stmt->fetch();

    if ($user && password_verify($mdp, $user['MotDePasse'])) {
        // L'utilisateur est authentifié
        session_start();
        $_SESSION['utilisateur'] = $user;
        header('Location: ../../accueil.php');
    } else {
        // L'utilisateur n'est pas authentifié
        $error = 'Adresse e-mail ou mot de passe incorrect.';
    }

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

require_once('../Connexion.html');
?>
