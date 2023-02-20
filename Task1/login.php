<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$sql = "SELECT * FROM tbl_users WHERE username = '$username' and password = '$password'";


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Xin chào " . $row["name"];
        echo "\nUsername " . $row["username"];
        // echo "\nPassword " . $row["password"];
        echo "\nGiới tính " . $row["sex"];
        echo "\nSĐT " . $row["sđt"];
        echo "\nEmail " . $row["email"];
    }
    
} else {
    echo "Tài khoản hoặc mật khẩu sai";
}
?>

<br>
<a href="Task1.php">Lại nè</a>