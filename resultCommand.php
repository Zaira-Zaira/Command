<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat de la commande</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <h1>Techos prod</h1>
        <h2>Voici le résultat de votre command</h2>
    </header>
   <?php
   include('./src/Product.php');
   $achat = new Product($_SESSION['tablettes'], $_SESSION['pc'], $_SESSION['portable'], $_SESSION['adresse'], date("Y-m-d, H:m"));
   ?>
    <main>
        <section>
            <h2>Votre commande du <?php print $achat->getDate()?></h2>
            <h3>Détails de votre commande</h3>
            <p>Nombre de produits :  <?php print  $achat->totalProducts() ?></p>
            <ul>
                <li><?php print  $achat->getTablettes() ?>  : Tablettes</li>
                <li><?php print  $achat->getPc() ?> : PC  </li>
                <li><?php print  $achat->getPortable() ?>  : Portables</li>
            </ul>
            <p>Le total de votre command est de <?php print $achat->totalPrice(600, 1200,700) ?></p>
            <p>Le total avec TVA de votre command est de <?php print $achat->getTva(600, 1200,700) ?> </p>
            <p>Adresse :  <?php print $achat->getAdresse() ?></p>
        </section>
    </main>
</body>
</html>
