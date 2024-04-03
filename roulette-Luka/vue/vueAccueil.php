    <div id="tirage" class ="text-center">
        <div class="d-flex flex-row justify-content-center">
            <form action="./?action=defaut" method="POST">
                <input type="submit" name="spin" value="TIRER">
            </form>
            <form action="./?action=defaut" method="POST">
                <input type="submit" name="reset" value="RESET">
            </form>
        </div>

        
        <?php  
        if(isset($randomEleve)){   
            echo "<form action='./?action=defaut' method='POST'>";
                echo "<div class='d-flex flex-row justify-content-center'>";
                echo "<p id='elu' class='mt-1'>";
                if(isset($randomEleve)){
                    echo "L'élève tiré au hasard est <strong>".$randomEleve[0]['prenomE']." ".$randomEleve[0]['nomE']."</strong";
                }
                echo "</p>";
                echo "</div>";
                echo "<select name='note'>";
                echo "<option value='Absent'>Absent</option>";
                for ($i = 0; $i <= 20; $i++) {
                    echo "<option value='" . $i . "'>" . $i . "</option>";
                }
                echo "</select>";
                echo "<input type='submit' id='validerNote' value='valider'>";
            echo "</form>";
            }
        ?>

    </div>  
    <br>
    <div class="d-flex justify-content-center">
        <table class="col-5">
            <td id="listeEleves0" class="d-flex flex-column justify-content-center">
                <tr>Élèves restant à passer :</tr>
                </br>
                <?php
                    // var_dump($eleves0);
                    echo " ";
                    if(isset($nomC)){
                        foreach ($eleves0 as $e) {
                            echo "<tr class='no-wrap'>".$e['prenomE']." ".$e['nomE']."</tr><br>";
                        }
                    }
                ?>
            </td>
        </table>

        <?php
            if(isset($nomC)&&count($absents) > 0){
                echo "<table class='col-5 text-center'>";
                echo "<tr><th>Les élèves n'étant pas passés pour cause d'absence :</th></tr>";
                foreach ($absents as $a) {
                    echo "<form action='./?action=defaut' method='POST'>";
                    echo "<tr>";
                    echo "<td>".$a['prenomE']." ".$a['nomE']."</td>";
                    echo "<input style='display:None' name='idEA' value='".$a['idE']."'>";
                    echo "<input style='display:None' name='idAA' value='".$a['idA']."''>";
                    echo "<td><select name='noteA'>";
                    for ($i = 0; $i <= 20; $i++) {
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                    echo "</select></td>";
                    echo "<td><input type='submit' id='validerNote' value='valider'></td>";
                    echo "</form>";
                }
                echo "</table>";
            }
        ?>
    </div>
</body>