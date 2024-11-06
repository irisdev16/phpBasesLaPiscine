<?php
function redirectNotLoggedUser(){
    //je démarre la session
    session_start();

//si la clé "is_authenticated" n'existe pas dans mon tableau de session(session renvoie toujours un tableau)
// OU qu'elle n'est pas égale a true (avec le ! )

    if (!key_exists('is_authenticated', $_SESSION) ||
        !$_SESSION['is_authenticated']) {

//je suis redirigé vers la page de connexion
        header('location: http://localhost:8888/php-bases/controller/guest/connexion-controller.php');

    }
}