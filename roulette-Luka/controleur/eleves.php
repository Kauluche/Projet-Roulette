<?php
session_start();

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/bd.classes.inc.php";
include_once "$racine/modele/bd.eleves.inc.php";
include_once "$racine/modele/bd.notes.inc.php";
include_once "$racine/modele/bd.Auth.inc.php";

$redirection="./?action=eleves";

// recuperation des donnees GET, POST, et SESSION

if(isset($_SESSION["User"]) && !empty($_SESSION["User"])) {
    $listeNotes = getNotesByUserId($_SESSION["User"]["idU"]);
}

// appel du script de vue qui permet de gerer l'affichage des donnees

include "$racine/vue/vueEleves.php"


?>