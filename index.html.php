<?php
session_start();

if (!isset($_SESSION['utilisateur'])) {
    $utilisateur = null;
} else {
    $utilisateur = $_SESSION['utilisateur'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="Image/Mascotte.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Accueil.css" />
    <title>RoboLearnLabs</title>
    <script src="Accueil.js"></script>
</head>
<body>
    <div class="container">
        <header class="header">
        <h2 class="heading2">RoboLearnLabs</h2>
        <?php if (!$utilisateur): ?>
            <button type="button" class="btn_connect" onclick="redirectToConnexionPage()">Connexion</button>
        <?php else: ?>   
            <button type="button" class="btn_connect" onclick="redirectToCompte()">Compte</button>
        <?php endif ?>
        </header>
            <a href="Selection_classes/Selection_classes.html">
                <img src="Image/QUIZZ.png" class="quizz">
            </a>
            <button type="button" class="btn_quizz" onclick="redirectToQuizzPage()">Participez à vos Quizz !</button>
            <a href="Resultats.html">
                <img src="Image/Resultats.png" class="resultats">
        </a>
        <button type="button" class="btn_resultats" onclick="redirectToResultatsPage()">Vos Résultats</button>
    </div>
</body>
</html>