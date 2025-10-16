<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print "<h1>calcul sur les variables</h1>";
    $tva = 0.206;
    $prix = 150;
    $nombre = 10;
    $prixht = $prix * $nombre;
    $prixttc = $prixht + ($prixht * $tva);
    print "le prix hors taxe est $prixht<br/>";
    print "<br/>le prix tout taxe compris est $prixttc";
    ?>

</body>
</html>