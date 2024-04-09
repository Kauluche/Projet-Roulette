<?php

include_once "bd.inc.php";

function addAbscence($idU, $idC){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("INSERT INTO absences (dateA, rectifier, idC, idU)
                            VALUES (CURDATE(), 0, :idC, :idU);
                            ");
        $req->bindParam(':idU', $idU, PDO::PARAM_INT);
        $req->bindParam(':idC', $idC, PDO::PARAM_INT);
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
        $req = $cnx->prepare("UPDATE absences
                            SET rectifier = 1
                            WHERE idA = :idA; 
                            ");
        $req->bindParam(':idA', $idA, PDO::PARAM_INT);
        $req->execute();
    } catch (PDOException $e) {
        // En cas d'erreur, affichez un message d'erreur
        return "Erreur !: " . $e->getMessage();
    }
    return "Absence ajoutée avec succès.";
}

function addNote($note, $idU){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("INSERT INTO notes (valeurN, idU)
                            VALUES (:valeurN, :idU); -- Remplacez '15' par la valeur de la note et '1' par l'ID de l'utilisateur concerné
                            ");
        $req->bindParam(':valeurN', $note, PDO::PARAM_STR);
        $req->bindParam(':idU', $idU, PDO::PARAM_INT);
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
        $req = $cnx->prepare("DELETE notes
                            FROM notes
                            INNER JOIN utilisateurs ON notes.idU = utilisateurs.idU
                            INNER JOIN appartenir ON utilisateurs.idU = appartenir.idU
                            INNER JOIN classes ON appartenir.idC = classes.idC
                            WHERE classes.nomC = :nomC;");
        $req->bindParam(':nomC', $nomC, PDO::PARAM_STR);
        $req->execute();
    } catch (PDOException $e) {
        // En cas d'erreur, affichez un message d'erreur
        return "Erreur !: " . $e->getMessage();
    }
    return "Note ajoutée avec succès.";
}

function resetabsences($nomC){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("UPDATE absences
        SET rectifier = 1
        WHERE idU IN (
            SELECT idU
            FROM appartenir
            WHERE idC IN (
                SELECT idC
                FROM classes
                WHERE nomC = :nomC
            )
        );");
        $req->bindParam(':nomC', $nomC, PDO::PARAM_STR);
        $req->execute();
    } catch (PDOException $e) {
        // En cas d'erreur, affichez un message d'erreur
        return "Erreur !: " . $e->getMessage();
    }
    return "Note ajoutée avec succès.";
}


?>