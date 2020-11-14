<?php
//include ('fonction3.php');    //pour faire appel a des fonctions d'un autre fichier externe
//require('fonction3.php');       //pour faire appel a des fonctions d'un autre fichier externe
//require_once('fonction3.php');       //pour faire appel a des fonctions d'un autre fichier externe une seule fois
require('fonction4.php');
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Fonction de creation de cham de formulaire</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<div id="site">
    <form method="post" action="">
        <?php
            champFormulaire('champ2','email','email', 'Entrez votre Email');
        ?>
        <input type="submit" name="enter" value="OK" />

    </form>
<br />
<br />
<br />
<a href="fonction3.php">Page precedente</a>

</div>


</body>
</html>