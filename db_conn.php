<?php
function ouvreConnexion() {
    $dbhost = "localhost"; // Nom du host (serveur) de la db
    $db_user = "root"; // Le nom de user de la db, par défaut : "root"
    $db_pass = ""; // Notre utilisateur root n'a pas de mot de passe
    $db_name = "peintres_db"; // Le nom de la db pour s'y connecter

$conn = new mysqli($dbhost, $db_user, $db_pass, $db_name); // Nouvelle instance de mysqli()

if ($conn->connect_error) {  // Fail safe : imprime un message d'erreur si la connexion ne fonctionne pas
    die("Connection failed: " . $conn->connect_error);
}

return $conn; // Retourne les infos de la db ou du message d'erreur
}
?>