<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Universitas Indonesia</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="bg-login">
    <div class="box-login">
    <img class="logo" src="img/logo.png" alt="logo" width="200px">
        <p>Silahkan login terlebih dahulu.</p>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="Username" class="input-control">
            <input type="password" name="pass" placeholder="Password" class="input-control">
            <input type="submit" name="submit" value="Login" class="btn">
        </form>
        <?php
        if(isset($_POST['submit'])){
            session_start();
            include 'db.php';
            $user = mysqli_real_escape_string($conn, $_POST['user']);
            $pass = mysqli_real_escape_string($conn, $_POST['pass']);
            $cek = mysqli_query($conn, "SELECT * FROM tb_user_ui WHERE username = '".$user."' AND password = '".$pass."'");
            if(mysqli_num_rows($cek) > 0){
                $d = mysqli_fetch_object($cek);
                $_SESSION['status_login'] = true;
                $_SESSION['a_global'] = $d;
                $_SESSION['id'] = $d->admin_id;
                echo '<script>window.location="https://www.ui.ac.id/"</script>';
            }else{
                echo '<script>alert("Username atau Password anda salah!")</script>';
            }
        }
        ?>
    </div>
</body>
</html>
