<?php

    include('conn.php');
    $id = $_GET['id'];

    $user = $_POST['user'];
    $mail = $_POST['mail'];
    $num = $_POST['num'];

    mysqli_query($conn, "update `users` set user='$user', email='$mail', mobile='$num' where id='$id'");
    header('location:index.php');
?>