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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" />
    <title>RoboLearnLabs</title>
    <script src="Classes.js"></script>
</head>

<body>
    <div class="container">
        <form>
            <div class="start-screen">
                <h1 class="heading">Quizz Primaire</h1>
                <h2 class="heading2">Choissisez votre classe</h2>
                <button type="button" class="btn_start" onclick="redirectToCPPage()">CP</button>
                <button type="button" class="btn_start" onclick="redirectToCE1Page()">CE1</button>
                <button type="button" class="btn_start" onclick="redirectToCE2Page()">CE2</button>
                <button type="button" class="btn_start" onclick="redirectToCM1Page()">CM1</button>
                <button type="button" class="btn_start" onclick="redirectToCM2Page()">CM2</button>
                <?php if (!$utilisateur): ?>
                    <button type="button" class="btn_connect" onclick="redirectToConnexionPage()">Connexion</button>
                <?php else: ?>   
                    <button type="button" class="btn_connect" onclick="redirectToCompte()">Compte</button>
                <?php endif ?>
            </div>
        </form>
    </div>
</body>

</html>