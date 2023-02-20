<?php

    include 'connect.php';
    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sex = $_POST['sex'];
        $sđt = $_POST['sđt'];
        $email = $_POST['email'];

        if(!empty($name) && !empty($username) && !empty($password) && !empty($sex) && !empty($sđt) && !empty($email)){

            $sql = "INSERT INTO `tbl_users` (`name`, `username`, `password`, `sex`, `sđt`, `email`) VALUE ('$name', '$username', '$password', '$sex', '$sđt', '$email')";

            if($conn->query($sql)===TRUE){
                echo"Lưu dữ liệu thành công";
            }else{
                echo "Lỗi {$sql}".$conn->error;
            }

        }else{
            echo"Nhập đầy đủ thông tin!!!";
        }
    }


?>
<br>
<a href="Task1.php">Cum-back</a>