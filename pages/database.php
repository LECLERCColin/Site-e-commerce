<?php
error_reporting(-1);
ini_set('display_errors', 'On');
?>

<h1>
    <?php
    $dsn = 'mysql:host=localhost';
    $user = 'root';
    $password = '';

    try {
        $dbh = new PDO($dsn, $user, $password);
        echo "Connexion autorisée 🎉";
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
        die();
    }
    ?>
</h1>

<?php
try {
    $dbh->exec("DROP DATABASE IF EXISTS `boutique`;");
    $dbh->exec("CREATE DATABASE `boutique`;");
    echo "<h2>Créer la base de données ✅</h2>";
} catch (PDOException $e) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">" . $e->getMessage() . "</div>";
    die();
}
?>

<?php
try {
    $dbh->exec('CREATE TABLE `boutique`.`produits` (
        `ID` INT NOT NULL AUTO_INCREMENT,
        `Nom` VARCHAR(150) NOT NULL,
        `Prix` float NOT NULL,
        `Description` TEXT NOT NULL,
        `Cat` VARCHAR(150) NOT NULL,
        PRIMARY KEY (`ID`));
      ');
    echo "<h2>Créer la structure de la table ✅</h2>";
} catch (PDOException $e) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">" . $e->getMessage() . "</div>";
    die();
}
?>

<?php
try {
    $stmt = $dbh->prepare('INSERT INTO `boutique`.`produits` 
    (ID, Nom, Prix, Description, Cat) VALUES
    (10, "GOKU BREAK", 300.89, "GOKU qui va die.", "FIG"),
    (20, "POP BROLY", 9.99, "ACHETEZ PAS C EST MOCHE", "FIG"),
    (30, "BROLY", 1400.66, "LE TOUCHE PAS IL EST TROP CHERE", "FIG");');
    $stmt->execute();
    echo "<h2>Insertion de valeurs dans la base ✅</h2>";
} catch (PDOException $e) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">" . $e->getMessage() . "</div>";
    die();
}
?>

<h1>Vous pouvez désormais cliquer sur <a href="../?page=boutique">ce lien</a> pour continuer la visite !</h1>


