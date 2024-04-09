<div id="moyenne">
    <form action="./?action=moyenne" method="POST">
        <input type="submit" name="resetN" value="RESET">
    </form> 
    <div class="d-flex justify-content-center">
        <table class="table table-bordered">
            <tbody>
                <?php
                if (isset($nomC)) {
                    foreach ($listeEleves as $e) {
                        echo "<tr>";
                        echo "<td class='text-white'>" . $e['prenomU'] . "</td><td class='text-white'>" . $e['nomU'] . "</td><td class='text-danger font-weight-bold'>" . $e['Moyenne_Notes'] . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

