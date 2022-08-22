<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register Form </title>

    <link rel="stylesheet" href="css1.css">
    <link rel="stylesheet" href="style1.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>

<body style="background: #E7F6F2;">
    <div class="center">
        <a class="nav-link" href="home.php" style="color: #000;">
            < กลับ</a>
                <h1>สมัครสมาชิก</h1>
                <form method="post" enctype="multipart/form-data">
                    <div class="txt_field">
                        <input name="userr" type="text" required>
                        <span></span>
                        <label>ชื่อผู้ใช้</label>
                    </div>
                    <div class="txt_field">
                        <input name="passr1" type="password" required>
                        <span></span>
                        <label>รหัสผ่าน</label>
                    </div>
                    <div class="txt_field" style="margin-bottom: 10px;">
                        <input name="passr2" type="password" required>
                        <span></span>
                        <label>ยืนยันรหัสผ่าน</label>
                    </div>
                    <div>
                    <label for="file">รูปโปรไฟล์</label>
                    <input id="file" type="file" name="img_user" accept="image/png, image/jpeg" style="width: 30%;" onclick="return confirm('รูปโปรไฟล์จะไม่สามารถเปลียนแปลงได้')" required>
                    <label for="file" style="font-size:5px;">แนะนำเป็น 800*800</label>
                    </div>

                    <input type="submit" value="สมัคร">

                    <div class="signup_link">
                        เข้าใช้งาน >><a href="login.php">Login</a>
                        << </div>
                </form>
    </div>


    <?php
    include "config.php";

    if (isset($_POST['userr'])) {
        $userr = $_POST['userr'];
        $passr1 = $_POST['passr1'];
        $passr2 = $_POST['passr2'];

        $ext = pathinfo(basename($_FILES['img_user']['name']), PATHINFO_EXTENSION);
        $new_imge_name = 'img_'.uniqid().".".$ext;
        $imge_path = "imgs/";
        $upload_path = $imge_path.$new_imge_name;

        $imgu = $new_imge_name;

        move_uploaded_file($_FILES['img_user']['tmp_name'],$upload_path);

        if ($passr1 == $passr2) {
            $sqlr = "SELECT * FROM user_n WHERE User_Name = '$userr'";
            $sqlir = mysqli_query($conn_1, $sqlr);

            if ($sqin = mysqli_num_rows($sqlir) <= 0) {
                $in = "INSERT INTO `user_n` (`ID`, `User_Name`, `Password`, `img_user`) VALUES ('', '$userr', '$passr1', '$imgu')";
                $inq = mysqli_query($conn_1, $in);
                if ($inq) {
                    echo "<script>";
                    echo "alert('ลงทะเบียนเรียบร้อย');";
                    echo "window.location='login.php';";
                    echo "</script>";
                }
            } else {
                echo "<script>";
                echo "alert('User นี้ถูกใช้ไปแล้ว');";
                echo "</script>";
            }
        } else {
            echo "<script>";
            echo "alert('Password ไม่ตรงกัน');";
            echo "</script>";
        }
    }


    ?>
</body>

</html>