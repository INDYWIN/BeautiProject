<?php
include 'config.php';
$iduser = mysqli_real_escape_string($conn_1, $_GET['iduser']);
$sqli = "SELECT * FROM user_n WHERE ID ='$iduser'";
$mysqli = mysqli_query($conn_1, $sqli);
$fecth = mysqli_fetch_array($mysqli);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register Form </title>
    <style>
    .circle {
  width: 40%;
  height: 40%;
  border: solid 2px #8a8a8a;
  border-radius: 100%;
}

</style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css1.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body style="background: #E7F6F2;">
    <div class="center">
        <a class="nav-link" href="dashboard.php" style="color: #000;">
            < กลับ</a>
                <h1>แก้ไขข้อมูลสมาชิก</h1>
                <form method="post">
                    <center><img class="circle" src="imgs/<?php echo $fecth['img_user']; ?>" alt=""></center>
                    <div class="txt_field">
                        <input type="text" value="<?php echo $fecth['ID']; ?>" name="iduser" disabled='disabled'>
                        <input type="hidden" value="<?php echo $fecth['ID']; ?>" name="iduser">
                        <span></span>
                        <label style="top: 0%;">ID</label>
                    </div>
                    <div class="txt_field">
                        <input type="text" value="<?php echo $fecth['User_Name']; ?>" name="usern">
                        <span></span>
                        <label>User_Name</label>
                    </div>
                    <div class="txt_field">
                        <input type="text" value="<?php echo $fecth['Password']; ?>" name="pass">
                        <span></span>
                        <label>Password</label>
                    </div>

                    <input type="submit" value="แก้ไข">
                </form>
    </div>
    <?php
    include 'config.php';

    if (isset($_POST['iduser'])) {
        $iduser = $_POST['iduser'];
        $usern = $_POST['usern'];
        $pass = $_POST['pass'];

        $update = "UPDATE user_n SET 
    User_Name ='$usern',
    Password='$pass'
    WHERE ID = '$iduser'";

        $up = mysqli_query($conn_1, $update);
        if ($up) {
            echo "<script>";
            echo "alert('แก้ไขเสร็จิ้น');";
            echo "window.location='dashboard.php';";
            echo "</script>";
        }
    }

    ?>

</body>

</html>