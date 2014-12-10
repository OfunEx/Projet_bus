<script src="js/formulaire.js"></script> 
<div id="form_trajet">
    <h1> Trouver Un Trajet </h1>
    <form id="form" action="modeles/formulaire.php" method="post"> 
        <fieldset>
            <label for="depart">Depart </label>
            <input data-type="search" data-lastval="" id="depart" name="depart" placeholder="entrez un point B"/>
            <ul data-role="listview" data-filter="true" data-filter-reveal="true" data-filter-placeholder="Search fruits..." data-inset="true">
            <?php
                $arretSimple = recup_arret();
                foreach ($arretSimple as $arret) {
                    echo "<li><a href=\"#\" value=".$arret[id_arret].">".$arret[nom_arret]."</a></li>";
                }
            ?>
            </ul>            

            <label for="arrivee"> Arivee </label> 
            <input type="text" id="arrivee" name="arrivee" placeholder="entrez un point B"/>
            
            <input id="all" type="submit" name="all_trajet"/><br>
            <input id="short" type="submit" name="short_trajet"/>
        </fieldset>
    </form> 
</div>
<div id="trajet">

</div>