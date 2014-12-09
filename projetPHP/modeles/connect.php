<?php
function connect()
{
    try
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=http://sql18.hostinger.fr/phpmyadmin/index.php?db=u804265178_bus;dbname=media', 'u804265178_ofun', 'licence3', $pdo_options);
        $bdd->exec('SET NAMES utf8');
        return $bdd;
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}
?>

