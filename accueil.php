<?php
session_start();

if (!isset($_SESSION['utilisateur'])) {
    // L'utilisateur n'est pas authentifié, redirigez-le vers la page de connexion
    header('Location: Connexion.html');
    exit();
}

$utilisateur = $_SESSION['utilisateur'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="accueil.css">
    <title>Accueil</title>
</head>
<body>
    <div class="container">
        <h1 class="heading">Bonjour <?php echo htmlspecialchars($utilisateur['Prenom']); ?> !</h1>
        <p class="heading2">Vous êtes connecté en tant que <?php echo htmlspecialchars($utilisateur['Email']); ?>.</p>
        <h4><a class="btn_accueil" href="index.html.php">Accueil</a></h4>
        <a href="deconnexion.php" class="btn_deconnexion">Déconnexion</a>
    </div> 

</body>
</html>
