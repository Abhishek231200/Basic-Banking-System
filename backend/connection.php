<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "tsfbank";

    $conn = mysqli_connect($servername,$username,$password,$db);

    if (!$conn) {
        die("Connection Error!");
    }





?>