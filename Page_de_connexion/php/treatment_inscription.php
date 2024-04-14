<?php

    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $mdp = $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
    $servname = 'localhost';
    $dbname = 'jeu';
    $user = 'User_Jeu';
    $pass = 'password';

    try {
        $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        $dbco->beginTransaction();
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql_check = "SELECT COUNT(*) FROM Utilisateurs WHERE Email = :email";
        $stmt_check = $dbco->prepare($sql_check);
        $stmt_check->bindParam(':email', $email);
        $stmt_check->execute();
        $count = $stmt_check->fetchColumn();

        if ($count == 0) {
            $sql = "INSERT INTO Utilisateurs(Email, MotDePasse, Prenom, Nom) VALUES(:email, :mdp, :prenom, :nom)";
            $stmt = $dbco->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':mdp', $mdp);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':nom', $nom);
            $stmt->execute();

            $result = 1;
        } else {
            $error = 'Cette adresse e-mail existe déjà dans notre base de donné.';
        }

        $dbco->commit();
    } catch (PDOException $e) {
        $dbco->rollBack();
        echo "Erreur : " . $e->getMessage();
    }

    require_once('Bienvenue.html.php');
?>