<?php

require_once('model/UserManager.php');

function verifyPass($pseudo,$verifpass)
{
    $userManager = new UserManager();

    $testedpass = $userManager->getPass($pseudo);
    $isPasswordCorrect = password_verify($verifpass, $testedpass['pass']);
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $testedpass['id'];
        $_SESSION['pseudo'] = $pseudo;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';

    }
}