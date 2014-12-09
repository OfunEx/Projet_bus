<?php

/*
 * Controleurs
 */

include('modeles/connect.php');

include('modeles/formulaire.php');
$arretSimple = recup_arret();

//On inclut la vue
include('vues/formulaire.php');

?>
