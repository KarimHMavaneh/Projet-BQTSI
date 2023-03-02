<?php include 'assets/templates/header.html';?>

<p> Hello, world! </p>
<p>Exemple d'acces + affichage simple a la base de donnée, le texte suivant provient de la base de donnée:</p>
<?php
    include 'controllers/PDO_init.php';
    $query = $connection->query("SELECT * FROM personne");
    $rows = $query->fetchAll();

    foreach ($rows as $row) {
        echo "ID: " . $row['id'];
        echo " -- NOM: " . $row['nom'];
        echo " -- PRENOM: " . $row['prenom'];
        echo " -- EMAIL: " . $row['email'];
        echo "<br/>"; // Retour a la ligne
    }
?>

<?include 'assets/templates/footer.html';?>