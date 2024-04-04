<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['answer'])) {
        $reponse = $_POST['answer'];

        $page = $_GET['page'];

        $reponse_correcte = $_POST['reponse_correcte'];

        // Connexion à la base de données MySQL
        $servername = "localhost";
        $username = "root";
        $password = "Eth4n1711##";
        $dbname = "test";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO reponses (reponse, page, reponse_correcte) VALUES ('$reponse', '$page', '$reponse_correcte')";

        if ($conn->query($sql) === TRUE) {
            echo "Réponse ajoutée avec succès à la base de données.";
        } else {
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