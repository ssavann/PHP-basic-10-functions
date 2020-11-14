<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
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


<?php
    function champFormulaire($type, $name, $placeholder){
        echo '<input type="' .$type. '" name="'.$name. '" placeholder="'.$placeholder.'" /><br />';

    }
?>


<form method="post" action="">
    <?php
        champFormulaire('text','nom', 'Votre Nom');
        champFormulaire('text','prenom', 'Votre Prenom');
        champFormulaire('email','email', 'Votre Email');
        champFormulaire('number','age', 'Votre Age');
    ?>
    <input type="submit" name="valider" value="Valider" /><br />
</form>


</body>
</html>