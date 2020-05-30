<?php
    session_start();

    $host="fdb25.awardspace.net";
    $database="3451845_shop";
    $user="3451845_shop";
    $password="Password123.";

    $idUser = $_SESSION['idUser'];

    $mysqli = new mysqli($host, $user, $password, $database);
    $query = "DELETE FROM CART WHERE (idUser = $idUser)";

    $mysqli->query($query);
    $mysqli->close();

    header('Location: ../../cart.php');
?>