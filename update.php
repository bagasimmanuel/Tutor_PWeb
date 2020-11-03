<?php
    session_start();
    include 'header.php';

    include 'conn.php';

    // var_dump($_GET['id']);
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE `id`= $id";

    $result = mysqli_query($conn,$sql);
    $row = $result->fetch_assoc();
    var_dump($row);
    $i = 0;
    mysqli_close($conn);

?>