<?php
//Initialisation du PDO et récupération de la config
function initializePdo() {

    try {
        require __DIR__ . '/config.php';

        $pdo = new PDO(
            "mysql:dbname=$dbname;host=$host;charset=utf8", $user, $password
        );
    } catch (PDOException $e) {
        echo 'erreur : ' . $e->getMessage();
        $pdo = null;
    }
    return $pdo;
}

//Préparation de la requête SQL
function prepareStatement($sql) {

    $pdo_statement = null;
    $pdo = initializePdo();

    if ($pdo) {
        try {
            $pdo_statement = $pdo->prepare($sql);
        } catch (PDOException $e) {
            echo 'erreur : ' . $e->getMessage();
        }
    }
    return $pdo_statement;
}

//Ajout d'un nouveau commentaire
function addNewComment($id_billet, $auteur, $commentaire) {

    $pdo_statement = prepareStatement(
        'INSERT INTO commentaires (id_billet, auteur, commentaire) VALUES (:id_billet, :auteur, :commentaire)');

    if (
        $pdo_statement &&
        $pdo_statement->bindParam(':id_billet', $id_billet) &&
        $pdo_statement->bindParam(':description', $description) &&
        $pdo_statement->bindParam(':userid', $userid) &&
        $pdo_statement->execute()
    ) {
        return $pdo_statement;
    }
}