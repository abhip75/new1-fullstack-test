<?php

    include('conn.php');

    $user = $_POST['user'];
    $mail = $_POST['mail'];
    $num = $_POST['num'];

    mysqli_query($conn, "insert into `users` (user,email,mobile) values ('$user','$mail','$num')");
    header('location:index.php');
?>