<?php
include 'connec.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: http://localhost:8000");

    $pdo = new PDO(DSN, USERNAME, PASSWORD);

    $lastname = trim($_POST['lastname']);
    $firstname = trim($_POST['firstname']);

    $query = 'INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)';
    $statement = $pdo->prepare($query);

    $statement->bindValue(':lastname', $lastname, PDO::PARAM_STR);
    $statement->bindValue(':firstname', $firstname, PDO::PARAM_STR);

    $statement->execute();
}
