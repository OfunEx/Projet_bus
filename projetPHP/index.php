<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/formulaire.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <title>Projet Bus</title>
    </head>
    <body>
        <?php

            session_start();
//            var_dump($_GET);

            if (!empty($_GET['page0']) && is_file('controleurs/'.$_GET['page0'].'.php')){

                include 'controleurs/'.$_GET['page0'].'.php';
            }
            else{
                session_destroy();
                include 'controleurs/formulaire.php';
            }
        ?>
    </body>
</html>
