<?php
function connect()
{
    try
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=sql18.hostinger.fr;dbname=u804265178_bus', 'u804265178_ofun', 'licence3', $pdo_options);
        $bdd->exec('SET NAMES utf8');
        return $bdd;
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}
?>

