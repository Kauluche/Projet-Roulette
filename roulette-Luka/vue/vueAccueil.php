    <div id="tirage" class ="text-center">
        <div class="d-flex flex-row justify-content-center">
            <form action="./?action=accueil" method="POST">
                <input type="submit" name="spin" value="TIRER">
            </form>
            <form action="./?action=accueil" method="POST">
                <input type="submit" name="reset" value="RESET">
            </form>
        </div>
        <?php
            if (isset($elevesT)) {
                echo "<p>L'élève tiré au hasard est :</p>";
                echo "<p>" . $elevesT['prenomU'] . " " . $elevesT['nomU'] . "</p>";
                echo "<form action='$redirection' method='POST'>";
                echo "<select name='notation'>";
                echo "<option selected>0</option>";
                for ($i = 1; $i <= 20; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                echo "</select>";
                echo "<input type='submit' id='validerNote' value='Valider'>";
                echo "</form>";
            }
        ?>

    </div>  
    <hr>
    <br>
    <div class='text-center'>
        <p><strong>Élèves restant à passer :</strong></p>
        <?php
        if (isset($nomC)) {
            foreach ($eleves0 as $e) {
                echo "<p>".$e['prenomU']." ".$e['nomU']."</p>";
            }
        }
        ?>
    </div>
</body>