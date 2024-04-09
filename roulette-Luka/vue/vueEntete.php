<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Roulette-Luka</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    </head>

    <body class="bg-secondary text-white">
        <h1 class="text-center"> It's Roulette Time</h1>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="./?action=accueil"> <i class="bi bi-house"></i> Accueil</a>
            <a class="navbar-brand" href="./?action=moyenne"> <i class="bi bi-calculator"></i> Moyenne</a>
            <a class="navbar-brand" href="./?action=defaut"> <i class="bi bi-box-arrow-left"></i></i>Déconnexion</a>
        </nav>
        <div class="text-center mt-2">
            <form action=<?php echo $redirection ?> method="POST">
                <select name="listeClasses">
                    <option selected>Choisissez une classe</option>
                    <?php foreach ($classes as $c) : ?>
                        <option valuer="<?= htmlspecialchars($c['nomC']); ?>"><?= htmlspecialchars($c['nomC']); ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="submit" id=validerClasse value="valider">
            </form>
            <?php if (isset($_SESSION['nomC']) && $_SESSION['nomC'] !== "") {
                echo "<p>Vous avez choisi la classe " . htmlspecialchars($nomC) . "</p>";
            } else {
                echo "<p>Veuillez choisir une classe :</p>";
            }
            ?>
        </div>  

