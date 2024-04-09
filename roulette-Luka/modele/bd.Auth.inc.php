<?php 

include_once "bd.inc.php";

function getUsers() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM utilisateurs");

        $req->execute();

        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

// Fonction pour vérifier les identifiants et les mots de passe
function checkCredentials($identifiant, $mdp) {
    $users = getUsers();

    foreach ($users as $user) {
        if ($user['identifiant'] === $identifiant && $user['mdp'] === $mdp) {
            return true; // Les identifiants sont corrects
        }
    }
    return false; // Les identifiants sont incorrects
}

function isUserInClass($idU) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT COUNT(*) AS count FROM appartenir WHERE idU = :idU");
        $req->bindParam(':idU', $idU, PDO::PARAM_INT);
        $req->execute();
        $count = $req->fetch(PDO::FETCH_ASSOC)['count'];
        
        if ($count > 0) {
            return true; // L'utilisateur est dans au moins une classe
        } else {
            return false; // L'utilisateur n'est dans aucune classe
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getUserInfo($identifiant, $mdp) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM utilisateurs WHERE identifiant = :identifiant AND mdp = :mdp");
        $req->bindParam(':identifiant', $identifiant, PDO::PARAM_STR);
        $req->bindParam(':mdp', $mdp, PDO::PARAM_STR);
        $req->execute();
        
        $userInfo = $req->fetch(PDO::FETCH_ASSOC);
        
        return $userInfo; // Retourne les informations de l'utilisateur ou NULL si aucun utilisateur trouvé
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}


// Utilisation de la fonction pour vérifier les identifiants et les mots de passe
if (isset($_POST['login'])) {
    $identifiant = $_POST['valueID'];
    $mdp = $_POST['valueMDP'];

    if (checkCredentials($identifiant, $mdp)) {
        $_SESSION['User']=getUserInfo($identifiant,$mdp);
        $idU=$_SESSION['User']['idU'];
        if (isUserInClass($idU)){
            header("Location: ./?action=eleves");
        }else{
            header("Location: ./?action=accueil");
        }
    } else {
        echo "Identifiants incorrects. Authentification échouée.";
    }
}

?>