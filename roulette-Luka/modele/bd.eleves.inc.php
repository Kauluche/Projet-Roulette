<?php

include_once "bd.inc.php";


function getMoyenneNotesByClasse($nomC){
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT u.prenomU, u.nomU, ROUND(AVG(n.valeurN), 2) AS Moyenne_Notes 
                            FROM utilisateurs u 
                            INNER JOIN appartenir a ON u.idU = a.idU 
                            INNER JOIN classes c ON a.idC = c.idC 
                            LEFT JOIN notes n ON u.idU = n.idU 
                            WHERE c.nomC = :nomC GROUP BY u.idU");
        $req->bindParam(':nomC', $nomC, PDO::PARAM_STR);
        $req->execute();

        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getElevesByStatut0($nomC){
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT u.*
                            FROM utilisateurs u
                            INNER JOIN appartenir a ON u.idU = a.idU
                            INNER JOIN classes c ON a.idC = c.idC
                            WHERE u.passage = 0
                            AND c.nomC = :nomC;");
        $req->bindParam(':nomC', $nomC, PDO::PARAM_STR);
        $req->execute();

        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getRandomEleve($nomC){
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT u.idU, u.prenomU, u.nomU 
                                FROM utilisateurs u 
                                INNER JOIN appartenir a ON u.idU = a.idU 
                                INNER JOIN classes c ON a.idC = c.idC 
                                WHERE u.passage = 0 AND c.nomC = :nomC");
        $req->bindParam(':nomC', $nomC, PDO::PARAM_STR);
        $req->execute();

        $eleves = $req->fetchAll(PDO::FETCH_ASSOC);
        
        // Choix aléatoire d'un élève parmi ceux de la classe sélectionnée
        if (!empty($eleves)) {
            $randomIndex = array_rand($eleves);
            $resultat = $eleves[$randomIndex];
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function elevePassed($idU){

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("UPDATE utilisateurs SET passage = 1 WHERE idU = :idU");
        $req->bindParam(':idU', $idU, PDO::PARAM_INT);
        $req->execute();

        // La mise à jour a réussi
        return true;
    } catch (PDOException $e) {
        // Une erreur s'est produite lors de la mise à jour
        return false;
    }
}

function resetPassage(){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("UPDATE utilisateurs SET passage = 0");
        $req->execute();

        // La mise à jour a réussi
        return true;
    } catch (PDOException $e) {
        // Une erreur s'est produite lors de la mise à jour
        return false;
    }
}

function getNotesByUserId($idU) {
    $notes = array();
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM notes WHERE idU = :idU");
        $req->bindParam(':idU', $idU, PDO::PARAM_INT);
        $req->execute();

        $notes = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Gérer l'erreur, imprimer ou enregistrer dans un fichier de journal, etc.
        // Ici, je vais simplement imprimer l'erreur pour déboguer.
        print "Erreur : " . $e->getMessage();
    }

    return $notes;
}

?>