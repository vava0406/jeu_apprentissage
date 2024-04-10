<?php
// Vérification de la méthode de requête
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification de la présence de la réponse
    if (isset($_POST['answer'])) {
        // Récupération des données du formulaire
        $reponse = $_POST['answer'];
        $reponse_correcte = $_POST['reponse_correcte'];
        $nom_question = $_POST['nom_question'];

        // Connexion à la base de données
        $servername = "localhost";
        $username = "root";
        $password = "password";
        $dbname = "test_8";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérification de la connexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Préparation de la requête SQL d'insertion
        $sql = "INSERT INTO Reponses_CP_francais (reponse, reponse_correcte, nom_question) VALUES ('$reponse', '$reponse_correcte', '$nom_question')";

        // Exécution de la requête
        if ($conn->query($sql) === TRUE) {
            // Succès de l'insertion
            echo "Réponse enregistrée avec succès.";
        } else {
            // En cas d'erreur
            echo "Erreur: " . $sql . "<br>" . $conn->error;
        }

        // Fermeture de la connexion à la base de données
        $conn->close();
    } else {
        // Aucune réponse sélectionnée
        echo "Aucune réponse sélectionnée.";
    }
} else {
    // Méthode de requête incorrecte
    echo "Erreur: Méthode de requête incorrecte.";
}
?>