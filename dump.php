<?php
include 'connec.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pdo = new PDO(DSN, USERNAME, PASSWORD);

    $query = "SELECT * FROM friend";
    $statement = $pdo->query($query)->fetchAll();

    foreach ($statement as $row) {
        echo $row['firstname'] . " " . $row['lastname'] . "<br />\n";
    }
    header("Refresh: 5; Location: http://localhost:8000");
    echo '<br><a href="http://localhost:8000">Click me in case redirect fails</a>';
}

