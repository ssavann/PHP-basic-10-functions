<?php
    $prix=10.32;
    if(empty($_POST['quantite'])) {
        $_POST['quantite'] = 1;
    }

    function calculer($tarif, $qt){
        $total = $tarif * $qt;
        if(($qt >=2) && ($qt < 5)){
            $total2 = $total * 0.10;
            $total = $total - $total2;
        } elseif($qt >= 5) {
            $total2 = $total * 0.20;
            $total = $total - $total2;
        }
        return round($total,2);     //faire un arroundi 2 chiffres apres la virgule
    }


?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>


<style>
#site {
    width: 50%;
    margin: 50px auto;
    text-align: center;
    rr
}
</style>
</head>
<body>

<div id="site">
    <h2><?= $prix; ?> Euros</h2>
    <form method="post" action="">
        <select name="quantite">
            <?php 
                for($i=1; $i <= 10; $i++){
                ?>  
                    <option value="<?= $i; ?>" <?php if($_POST['quantite']==$i) { echo 'selected="selected"';} ?>><?= $i; ?></option>
                <?php       //pour garder le selecteur a l'endroit dont l'internaute selectione la quatite
                }
            ?>
        </select>
        <input type="submit" value="Acheter" name="acheter" />

    </form>
    <p>A partir de 2 articles achetes, 10% de remise. </br />
    Plus de 5 articles achetes, 20% de remise.</p>
    <br /><br />
<?php
if(isset($_POST['acheter'])) {
    echo calculer($prix,$_POST['quantite']). ' Euros';
}
    
?>
</div>


</body>
</html>