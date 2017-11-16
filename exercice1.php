<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php // Créer les tableaux de bateaux
    $bateaux = array(
    "Manureva" => array ( "nbEquipage" => 3, "passager" => 4),
    "Patat" => array ( "nbEquipage" => 2, "passager" => 4) // patat est plus petit
    "Sirius" => array ( "nbEquipage" => 6, "passager" => 8),
    "Surcouf" => array ( "nbEquipage" => 8, "passager" => 15),
    "Nautilus" => array ( "nbEquipage" => 5, "passager" => 5)
    ); ?>
    <!-- Parcourir les tableaux 
    foreach($bateaux as $lesbateaux => $lequipage) {
            echo $lesbateaux;
        foreach($lequipage as $personnes => $valeurs) {
                echo $personnes.$valeurs;
        }
    } -->
    <h1>Taratatam !</h1>
    <h2>TP de l'exercice 1 sur les bateaux</h2>
    <p>Nous allons afficher les bateaux qui peuvent accepter au moins 10 passagers:</p>
    <?php // autre Parcourt
    foreach($bateaux as $lesbateaux => $lequipage) {
       if($lequipage["passager"] >= 10) {
            echo $lesbateaux;
            echo "<br>Equipage : ".$lequipage["nbEquipage"];
            echo "<br>Passagers : ".$lequipage["passager"]."<br>";
       }
    }
    // ou
    //$bateaux["Manureva"]["nbEquipage"];
    ?>
</body>
</html>