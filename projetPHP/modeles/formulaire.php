<?php

/*
 *modeles
 */

//permet d'appeler la page de façon autonome et verifie la securite
If (isset($_GET['auto']) == 1 || isset($_POST['auto']) == 1)
    {
        session_start();

        include_once('dbconnexion.php');

        if (empty($_SESSION['login']) || empty($_SESSION['pass']) || empty($_SESSION['niveau']))
            {
            header('Location: ../index.php');
            }

        if ($_SESSION['niveau'] != 2 )
            {
                header('Location: ../index.php');
            }
    }
 else
     {
        include_once('modeles/connect.php');
     }

//__________________________________________________Function
     function recup_arret(){
        $sql = "SELECT *
            FROM Arret
            ";
        $bdd = connect();
        $requete = $bdd -> query($sql);
        $arret = $requete;

        return $arret;
     }

     function court_trajet(){

     }

     function all_trajet(){

     }


?>
