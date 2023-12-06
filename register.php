<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="styleLog-Reg.css">
    <script src=""></script>

    <title>Registrasi</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
        <?php
            include 'config.php';
            error_reporting(0);
            session_start();

            if (isset($_SESSION['username'])) {
                header("Location: index.php");
            }

            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = md5($_POST['password']);
                $cpassword = md5($_POST['cpassword']);

                if ($password == $cpassword) {
                    $sql = "SELECT * FROM user WHERE email='$email'";
                    $result = mysqli_query($conn, $sql);
                    if (!$result->num_rows > 0) {
                        $sql = "INSERT INTO user (username, email, password)
                VALUES ('$username', '$email', '$password')";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            ?>
                                <div class="alert alert-success" style=" margin-left: auto; margin-right: auto; border-radius: 10px;" role="alert">
                                    <b>Registrasi Berhasil, silahkan login!</b>
                                </div>
                                <meta http-equiv="refresh" content="2;url=register.php">
                            <?php
                            $username = "";
                            $email = "";
                            $_POST['password'] = "";
                            $_POST['cpassword'] = "";
                        } else {
                            ?>
                            <div class="alert alert-danger" style=" margin-left: auto; margin-right: auto; border-radius: 10px;" role="alert">
                                <b>Woops Terjadi Kesalahan!</b>
                            </div>
                            <meta http-equiv="refresh" content="2;url=register.php">
                        <?php
                        }
                    } else {
                        ?>
                        <div class="alert alert-danger" style=" margin-left: auto; margin-right: auto; border-radius: 10px;" role="alert">
                            <b>Woops Email Sudah Terdaftar!</b>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-danger" style=" margin-left: auto; margin-right: auto; border-radius: 10px;" role="alert">
                        <b>Password Tidak sama!</b>
                    </div>
                    <?php
                }
            }

            ?>

            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div><br>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div><br>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div><br>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div><br>
            <button name="submit" class="btn">Register</button><br>
            <center>
                <p class="login-register-text">Anda sudah punya akun? <a href="index.php">Login </a></p>
            </center>
        </form>
    </div>
</body>

</html>