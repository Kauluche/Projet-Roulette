<?php

include_once "bd.inc.php";

function addAbscence($idEP){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("INSERT INTO abscences (dateA, idE) VALUES (CURDATE(), :idEP)");
        $req->bindParam(':idEP', $idEP, PDO::PARAM_INT);
        $req->execute();
    } catch (PDOException $e) {
        // En cas d'erreur, affichez un message d'erreur
        return "Erreur !: " . $e->getMessage();
    }
    return "Absence ajoutée avec succès.";
}

function delAbscence($idA){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("DELETE FROM abscences WHERE idA = :idA;");
        $req->bindParam(':idA', $idA, PDO::PARAM_INT);
        $req->execute();
    } catch (PDOException $e) {
        // En cas d'erreur, affichez un message d'erreur
        return "Erreur !: " . $e->getMessage();
    }
    return "Absence ajoutée avec succès.";
}

function addNote($note, $idE){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("INSERT INTO notes (valeurN, idE) VALUES (:valeurN, :idE)");
        $req->bindParam(':valeurN', $note, PDO::PARAM_STR);
        $req->bindParam(':idE', $idE, PDO::PARAM_INT);
        $req->execute();
    } catch (PDOException $e) {
        // En cas d'erreur, affichez un message d'erreur
        return "Erreur !: " . $e->getMessage();
    }
    return "Note ajoutée avec succès.";
}

function resetNotes($nomC){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("DELETE notes FROM notes INNER JOIN eleves ON notes.idE = eleves.idE INNER JOIN classes ON eleves.idC = classes.idC WHERE classes.nomC = :nomC ");
        $req->bindParam(':nomC', $nomC, PDO::PARAM_STR);
        $req->execute();
    } catch (PDOException $e) {
        // En cas d'erreur, affichez un message d'erreur
        return "Erreur !: " . $e->getMessage();
    }
    return "Note ajoutée avec succès.";
}

function resetAbscences($nomC){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("DELETE abscences FROM abscences INNER JOIN eleves ON abscences.idE = eleves.idE INNER JOIN classes ON eleves.idC = classes.idC WHERE classes.nomC = :nomC ");
        $req->bindParam(':nomC', $nomC, PDO::PARAM_STR);
        $req->execute();
    } catch (PDOException $e) {
        // En cas d'erreur, affichez un message d'erreur
        return "Erreur !: " . $e->getMessage();
    }
    return "Note ajoutée avec succès.";
}

?>