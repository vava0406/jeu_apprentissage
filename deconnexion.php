<?php
session_start();
session_destroy();
header('Location: Page_de_connexion/Connexion.html');
exit();
?>