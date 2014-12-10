<script src="js/formulaire.js"></script> 
<div id="form_trajet">
    <h1> Trouver Un Trajet </h1>
    <form id="form" action="modeles/formulaire.php" method="post"> 
        <fieldset>
            <label>Depart </label>
            <select type="text" name="depart" placeholder="entrez un point A">
            <?php 

                foreach ($arretSimple as $arret) {
                    echo "<option value=".$arret[id_arret].">".$arret[nom_arret]."</option>";
                }
            ?>
            </select>

            <label> Arivee </label> 
            <select type="text" name="arrivee" placeholder="entrez un point B">
            <?php 

                foreach ($arretSimple as $arret) {
                    echo "<option value=".$arret[id_arret].">".$arret[nom_arret]."</option>";
                }
            ?>
            </select>

            <input id="all" type="submit" name="all_trajet"/>
            <input id="short" type="submit" name="short_trajet"/>
        </fieldset>
    </form> 
</div>