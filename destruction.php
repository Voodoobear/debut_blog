<?php
session_start();
session_destroy();

echo '<p style="text-align: center; margin: 5em 0 0 0;">Vous vous êtes bien déconnecté !</p> <p style="text-align: right; margin: 5em 2em 0 0;">Revenir à la page d\'accueil : <a href="index.php">Page d\'accueil</a></p>';

header('Location:index.php');

?>