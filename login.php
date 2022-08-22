<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css1.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  </head>
  <body style="background: #E7F6F2;">
    <div class="center">
      <a class="nav-link" href="home.php" style="color: #000;">< กลับ</a>
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input name="user" type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input name="pass" type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="Register.php">Signup</a>
        </div>
      </form>
    </div>

    <?php
    include 'config.php';
    if (isset($_POST['user'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM user_n WHERE User_Name = '$user' AND Password='$pass'";
        $mysql = mysqli_query($conn_1,$sql);

        if ($num=mysqli_num_rows($mysql)>0) {
            $userid = mysqli_fetch_array($mysql);
            $_SESSION['user'] = $_POST['user'];
            $_SESSION['pass'] = $_POST['pass'];
            echo "ยินดีต้อนรับคุณ : $user";
            echo "<script>window.location.replace('homelogin.php?iduser=$userid[0]')</script>";
        }
        else {
          echo "<script>";
          echo "alert('ชื่อ หรือ รหัส ไม่ถูกต้อง');";
          echo "</script>";
        }
    }
    
    
    ?>

  </body>
</html>
