<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['answer'])) {
        // Récupérer les données du formulaire
        $reponse = $_POST['answer'];
        $page = $_POST['page'];
        $reponse_correcte = $_POST['reponse_correcte'];

        // Connexion à la base de données MySQL
        $servername = "localhost";
        $username = "root";
        $password = "password";
        $dbname = "test_connaissance_2";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Préparer la requête SQL d'insertion en fonction de la page
        $sql = "INSERT INTO reponse_maths (reponse, page, reponse_correcte) VALUES ('$reponse', '$page', '$reponse_correcte')";

        if ($conn->query($sql) === TRUE) {
            // Succès de l'insertion, ne rien renvoyer
        } else {
            // En cas d'erreur, afficher un message d'erreur
            echo "Erreur: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        echo "Aucune réponse sélectionnée.";
    }
} else {
    echo "Erreur: Méthode de requête incorrecte.";
}
?>