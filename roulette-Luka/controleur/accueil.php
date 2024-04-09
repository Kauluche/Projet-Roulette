<?php
session_start();

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/bd.classes.inc.php";
include_once "$racine/modele/bd.eleves.inc.php";
include_once "$racine/modele/bd.notes.inc.php";

$redirection="./?action=accueil";


// variables
$classes = getClasses();

// recuperation des donnees GET, POST, et SESSION

#Prise en compte de la classe
if(isset($_POST['listeClasses'])){
    $_SESSION['nomC'] = $_POST['listeClasses'];
}

#Sélection des élèves par apport à la classe qui reste à passer
if(isset($_SESSION['nomC'])&&$_SESSION['nomC']!==""){
    $nomC=$_SESSION['nomC'];
    $eleves0=getElevesByStatut0($nomC);
}

#Tirage au sort d'un élève
if(isset($_POST['spin']) && !empty($eleves0)){
    $nomC=$_SESSION['nomC'];
    $elevesT=getRandomEleve($nomC);
    $_SESSION['idUT']=$elevesT['idU'];
    elevePassed($elevesT['idU']);
    $eleves0=getElevesByStatut0($nomC);
}

#Envoie d'une note
if(isset($_POST['notation'])){
    $nomC=$_SESSION['nomC'];
    addNote($_POST['notation'],$_SESSION['idUT']);
    elevePassed($elevesT['idU']);
    $eleves0=getElevesByStatut0($nomC);
}

if(isset($_POST['reset'])){
    $nomC=$_SESSION['nomC'];
    resetPassage();
    $eleves0=getElevesByStatut0($nomC);
}

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees

include "$racine/vue/vueEntete.php";
include "$racine/vue/vueAccueil.php";

?>