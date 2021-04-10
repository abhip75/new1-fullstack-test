<?php

$conn = mysqli_connect("localhost","root","","datainfo");

if(mysqli_connect_errno())
{
    echo "failed to connect to Mysql: " .mysqli_connect_error();
}
?>