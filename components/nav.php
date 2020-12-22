<?php
    require 'actions/db.class.php';
    require 'actions/panier.class.php';
    $DB = new DB();
    $panier = new panier($DB);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-STORE LECLERC GRELARD MURE</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="./css/style1.css">
</head>
<body>
    <header>
    <div class="nav_inf">
        <nav>
            <ul class="navbar">
                <li><a href="?page=boutique">BOUTIQUE</a></li>
                <li><a href="?page=panier">PANIER (<?= $panier->count(); ?>)</a></li>
                <li><a href="?page=logout">DECONNEXION</a></li>
            </ul>
        </nav>
    </div>
</header>
</body>
