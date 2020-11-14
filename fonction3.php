<?php
require('fonction4.php');
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Fonctions</title>


    <link rel="stylesheet" href="style.css" />
</head>
<body>

<!--
<form method="post" action="">
    <input type="text" name="nom" placeholder="Votre Nom" /><br />
    <input type="text" name="prenom" placeholder="Votre Prenom" /><br />
    <input type="email" name="email" placeholder="Votre Email" /><br />
    <input type="submit" name="valider" value="Valider" /><br />


</form>
-->




<div id="site">
<form method="post" action="">
    <?php
        champFormulaire('champ1','text','nom', 'Votre Nom');
        champFormulaire('champ1','text','prenom', 'Votre Prenom');
        champFormulaire('champ1','email','email', 'Votre Email');
        champFormulaire('champ1','number','age', 'Votre Age');
    ?>
    <input type="submit" name="valider" value="Valider" /><br />
</form>

<br />
<br />
<br />
<a href="formulaire.php">Page suivante</a>

</div>

</body>
</html>