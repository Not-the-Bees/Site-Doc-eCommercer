<?php
// Démarrage de la session
session_start ();

// Destruction des variables de notre session
session_unset ();

// Destruction de notre session
session_destroy ();

// Redirection vers page d'accueil
header ('location: ../controllers/login.php');