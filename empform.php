<?php
include 'config.php';
$idemp = mysqli_real_escape_string($conn_1, $_GET['idem']);
$sqli = "SELECT * FROM employee WHERE ID ='$idemp'";
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
            width: 16%;
            height: 16%;
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
    <div class="center" style="width: 800px;">
        <a class="nav-link" href="dashboard.php" style="color: #000;">
            < กลับ</a>
                <h1>แก้ไขข้อมูลพนักงาน</h1>
                <form method="post">
                    <center><img class="circle" src="imgemp/<?php echo $fecth['img_emp']; ?>" alt=""></center>
                    <div style="margin-bottom: 0px; margin-top: 10px;" class="txt_field">
                        <input type="text" value="<?php echo $fecth['ID']; ?>" name="idemp" disabled='disabled'>
                        <input type="hidden" value="<?php echo $fecth['ID']; ?>" name="idemp">
                        <span></span>
                        <label style="top: 0%;">ID</label>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="txt_field">
                                <input type="text" value="<?php echo $fecth['User']; ?>" name="usern">
                                <span></span>
                                <label>User</label>
                            </div>
                            <div class="txt_field">
                                <input type="text" value="<?php echo $fecth['Password']; ?>" name="pass">
                                <span></span>
                                <label>รหัสผ่าน</label>
                            </div>
                            <div class="txt_field">
                                <input type="text" value="<?php echo $fecth['Age']; ?>" name="age">
                                <span></span>
                                <label>อายุ</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="txt_field">
                                <input type="text" value="<?php echo $fecth['Name']; ?>" name="name">
                                <span></span>
                                <label>ชื่อ</label>
                            </div>
                            <div class="txt_field">
                                <input type="text" value="<?php echo $fecth['Last_Name']; ?>" name="lastname">
                                <span></span>
                                <label>นามสกุล</label>
                            </div>
                            <div class="txt_field">
                                <input type="text" value="<?php echo $fecth['Experience']; ?>" name="exper">
                                <span></span>
                                <label>ประสบการณ์ทำงาน</label>
                            </div>
                        </div>
                    </div>

                    <input type="submit" value="แก้ไข">
                </form>
    </div>
    <?php
    include 'config.php';

    if (isset($_POST['idemp'])) {
        $idemp = $_POST['idemp'];
        $usern = $_POST['usern'];
        $pass = $_POST['pass'];
        $age = $_POST['age'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $exper = $_POST['exper'];

        $update = "UPDATE employee SET 
    User ='$usern',
    Password='$pass',
    Name='$name',
    Last_Name='$lastname',
    Age='$age',
    Experience='$exper'
    WHERE ID = '$idemp'";

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