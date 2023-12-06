<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="styleLog-Reg.css">
    <script src=""></script>
    <title>Login</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
        <?php
        include 'config.php';
        error_reporting(0);
        session_start();

        if (isset($_SESSION['username'])) {
            header("Location: home.html");
        }

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = md5($_POST['password']);

            $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            $check = mysqli_num_rows($result);
            if ($check > 0) {
                header("Location:home.html");
            }else{
                ?>
                <div class="alert alert-danger" style=" margin-left: auto; margin-right: auto; border-radius: 10px;" role="alert">
                    <b>Email atau password salah!</b>
                </div>
                <meta http-equiv="refresh" content=";url=index.php">
                <?php
                }
            }
        ?>
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div><br>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div><br>
            <button name="submit" class="btn">Login</button><br>
            <center><p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p></center>
        </form>
    </div>
</body>
</html>