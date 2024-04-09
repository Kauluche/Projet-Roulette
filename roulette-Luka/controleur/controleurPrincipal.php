<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "Auth.php";
    $lesActions["accueil"] = "accueil.php";
    $lesActions["moyenne"]= "moyenne.php";
    $lesActions["eleves"]= "eleves.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>