<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "task1";

    $conn = new mysqli($host, $username, $password, $dbname);

    if($conn->connect_errno){
        die("Kết nối không thành công:". $conn->connect_errno);
    }


?>
