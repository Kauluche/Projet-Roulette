<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Roulette-Luka</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    </head>
    <body>
        <div>
            <body class="bg-secondary text-white">
                <h1 class="text-center">It's Roulette Time</h1>
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="./?action=defaut"><i class="bi bi-box-arrow-left"></i></i>Déconnexion</a>
                </nav>
                <br>
                <hr>
                <br>
                <table class="table table-bordered">
                    <tbody>
                        <?php
                            foreach ($listeNotes as $n) {
                                echo "<tr>";
                                echo "<td class='text-white'>" . $n['dateN']."</td><td class='text-danger font-weight-bold'>" . $n['valeurN'] . "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>

        </div>
