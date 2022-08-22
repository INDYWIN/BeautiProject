<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css1.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body style="background: #E7F6F2;">

    <div class="container bg-light">
        <?php
        include 'menu.php';
        ?>
        <h2>ลงทะเบียนเป็นพนักงาน</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">ชื่อเข้าระบบ</label><br>
                        <input placeholder="user1" style="width: 100%;" type="text" name="userem" id="" aria-describedby="helpId" placeholder="" required>
                        <small id="helpId" class="form-text text-muted">กรุณาตั้งชื่อเข้าใช้ระบบ</small>
                    </div>
                    <div class="form-group">
                        <label for="">รหัสผ่าน</label><br>
                        <div class="first-example">
                            <input style="width: 47%;" placeholder="a-z A-Z 0-9" type="password" name="passem1" id="password-field" aria-describedby="helpId" placeholder="" required>
                            <input style="width: 48%;" placeholder="a-z A-Z 0-9" type="password" name="passem2" id="password-field" aria-describedby="helpId" placeholder="" required>
                            <i id="pass-status" class="ion-eye-disabled" aria-hidden="true" onClick="viewPassword()"></i>
                        </div>
                        <small id="helpId" class="form-text text-muted">กรุณาใส่รหัสผ่าน 2 รอบ</small>
                    </div>
                    <div class="form-group">
                        <label for="">ชื่อ - นามสกุล</label><br>
                        <input placeholder="นางสุดา" style="width: 49%;" type="text" name="nameem" id="" aria-describedby="helpId" placeholder="" required>
                        <input placeholder="ยืนหนึ่ง" style="width: 50%;" type="text" name="lastnameem" id="" aria-describedby="helpId" placeholder="" required>
                        <small id="helpId" class="form-text text-muted">กรุณาใส่ชื่อและนามสกุล(จริง)</small>
                    </div>
                    <div class="form-group">
                        <label for="">ชื่อเล่น</label><br>
                        <input placeholder="นก" style="width: 100%;" type="text" name="nnaemem" id="" aria-describedby="helpId" placeholder="" required>
                        <small id="helpId" class="form-text text-muted">กรุณาใส่ชื่อเล่น</small>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">อายุ</label><br>
                        <input style="width: 100%;" type="text" name="ageem" id="" aria-describedby="helpId" placeholder="" required>
                        <small id="helpId" class="form-text text-muted">กรุณาใส่อายุ</small>
                    </div>
                    <div class="form-group">
                        <label for="">วุฒิการศึกษา</label><br>
                        <select style="width: 100%;" name="education" id="">
                            <option value="ม.6">ม.6</option>
                            <option value="ปวช.">ปวช.</option>
                            <option value="ปวส.">ปวส.</option>
                            <option value="ป.ตรี">ป.ตรี</option>
                        </select>
                        <small id="helpId" class="form-text text-muted">กรุณาเลือกวุฒิการศึกษา</small>
                    </div>
                    <div class="form-group">
                        <label for="">ประสบการณ์ทำงาน</label><br>
                        <input style="width: 100%;" type="text" name="experience" id="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">กรุณาบอกประสบการณ์ทำงาน เช่น 1ปี 1เดือน 1วัน (ไม่บังคับให้ใส่)</small>
                    </div>
                    <div class="form-group"><br>
                        <div>
                            <label for="file">รูปโปรไฟล์</label>
                            <input id="file" type="file" name="img_emp" accept="image/png, image/jpeg" style="width: 15%;" onclick="return confirm('รูปโปรไฟล์จะไม่สามารถเปลียนแปลงได้')" required>
                            <label for="file" style="font-size:5px; margin-right: 25%;">แนะนำเป็น 800*800</label>

                            <button type="submit" class="btn btn-outline-success">สมัคร</button>
                            <button type="reset" class="btn btn-danger">ยกเลิก</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php
    include 'config.php';
    if (isset($_POST['userem'])) {
        $user = $_POST['userem'];
        $pass1 = $_POST['passem1'];
        $pass2 = $_POST['passem2'];
        $name = $_POST['nameem'];
        $lname = $_POST['lastnameem'];
        $nname = $_POST['nnaemem'];
        $age = $_POST['ageem'];
        $educ = $_POST['education'];
        $exper = $_POST['experience'];

        $ext = pathinfo(basename($_FILES['img_emp']['name']), PATHINFO_EXTENSION);
        $new_imge_name = 'img_'.uniqid().".".$ext;
        $imge_path = "imgemp/";
        $upload_path = $imge_path.$new_imge_name;

        $imgem = $new_imge_name;

        move_uploaded_file($_FILES['img_emp']['tmp_name'],$upload_path);

        // $ext = pathinfo(basename($_FILES['img_emp']['name']), PATHINFO_EXTENSION);
        // $new_imge_name = 'img_'.uniqid().".".$ext;
        // $imge_path = "imgemp/";
        // $upload_path = $imge_path.$new_imge_name;

        // $imgemp = $new_imge_name;

        // move_uploaded_file($_FILES['img_emp']['tmp_name'],$upload_path);


        if ($pass1 == $pass2) {
            $sqlr = "SELECT * FROM employee WHERE User = '$user'";
            $sqlir = mysqli_query($conn_1, $sqlr);

            if ($sqin = mysqli_num_rows($sqlir) <= 0) {
                $in = "INSERT INTO `employee` (`ID`, `User`, `Password`, `Name`, `Last_Name`, `Nick_Name`, `Age`, `Education`, `Experience`, `img_emp`) 
                VALUES ('', '$user', '$pass1', '$name', '$lname', '$nname', '$age', '$educ', '$exper', '$imgem')";
                $inq = mysqli_query($conn_1, $in);
                if ($inq) {
                    echo "<script>";
                    echo "alert('ลงทะเบียนเรียบร้อย');";
                    echo "window.location='registerEM.php';";
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function viewPassword() {
            var passwordInput = document.getElementById('password-field');
            var passStatus = document.getElementById('pass-status');

            if (passwordInput.type == 'password') {
                passwordInput.type = 'text';
                passStatus.className = 'ion-eye';
            } else {
                passwordInput.type = 'password';
                passStatus.className = 'ion-eye-disabled';
            }
        }
    </script>
</body>

</html>