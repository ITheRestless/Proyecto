<?php
    session_start();

    $host="fdb25.awardspace.net";
    $database="3451845_shop";
    $user="3451845_shop";
    $password="Password123.";

    $idProduct = $_POST['idProduct'];
    $idUser = $_SESSION['idUser'];

    $mysqli = new mysqli($host, $user, $password, $database);

    $query = "INSERT INTO CART (idUser, idProduct) VALUES ('$idUser', '$idProduct')";

    $mysqli->query($query);
    $mysqli->close();

    header('Location: ../../cart.php');
?>