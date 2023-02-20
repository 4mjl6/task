<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link rel="stylesheet" href="Task1.css">
</head>
<body>
    <div class="container">
        <form action="signup.php" method="post">
            <h1>Đăng ký</h1>

            <div  class="form-control">
                <input type="text" placeholder="Họ và tên" id="name" size="45" name="name">
            </div>

            <div class="form-control">
                <input type="text" placeholder="Username" size="45" name="username" id="name">
            </div>

            <div class="form-control">
                <input type="password" placeholder="Password" size="45" id="password" name="password">
            </div>

            <div class="sex">
                <label for="">Giới  tính: </label>
                <input type="radio" id="sex" name="sex" value="male">Nam
                <input type="radio" id="sex" name="sex" value="female">Women
            </div>


            <div class="form-control">
                <input type="text" placeholder="SĐT" size="45" name="sđt" id="sđt">
            </div>

            <div class="form-control">
                <input type="text" placeholder="Email" size="45" name="email" id="email">
            </div>

            <button type="submit" class="submit" name="submit" value="submit">Đăng ký</button>
        </form>
    </div>

    <div class="container" id="f2">
        <form action="login.php" method="post">
            <h1>Đăng nhập</h1>

            <div class="form-control">
                <input type="text" placeholder="Username" size="45" name="username" id="name">
            </div>

            <div class="form-control">
                <input type="password" placeholder="Password" size="45" id="pw-login" name="password">
            </div>
            
            <button type="submit" class="submit" name="submit">Đăng nhập</button>
        </form>
    </div>
</body>
</html>