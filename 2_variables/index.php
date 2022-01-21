<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        $hello = "Hello"; 
        // Afficher la variable $hello

        echo $hello;
        var_dump($hello);
                               // $hello est de type string.


        // # Concaténer des variables avec du texte
        // $world = "World";
        // echo $hello . " " . $world;
        // $varTrois = $hello . " " . $world;
        // echo "<br>";
        // echo $varTrois;

        # Variables numériques
        $ht = "15.2";
        echo "prix : ".$ht. "<br>";
        $tva = $ht * 20 / 100;
        echo "tva : ".$tva. "<br>";
        $ttc = $ht + $tva;
        echo "prix ttc : ". + $ttc;

    ?>
</body>
</html>