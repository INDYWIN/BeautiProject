<!doctype html>
<html lang="en">

<head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap');
    </style>
</head>

<body style="font-family: 'Kanit', sans-serif;">
    <div class="container">
        <?php
        include "nav.php";
        ?>
        <h3>ระบบลงทะเบียนนักเรียน</h3>

        <form action="studentadd.php" method="post">
            <div class="form-group">
                <label for="">ชื่อ</label>
                <input type="text" class="form-control" name="stu_name" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">กรุณาใส่ชื่อนักเรียน</small>
            </div><div class="form-group">
                <label for="">นามสกุล</label>
                <input type="text" class="form-control" name="stu_lastname" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">กรุณาใส่นามสกุลนักเรียน</small>
            </div><div class="form-group">
                <label for="">ที่อยู่</label>
                <input type="text" class="form-control" name="stu_address" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">กรุณาใส่ที่อยู่นักเรียน</small>
            </div><div class="form-group">
                <label for="">หมายเลขโทรศัพท์</label>
                <input type="text" class="form-control" name="stu_tel" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">กรุณาใส่หมายเลขโทรศัพท์นักเรียน</small>
            </div><div class="form-group">
                <label for="">ชื่อผู้ใช้</label>
                <input type="text" class="form-control" name="stu_username" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">กรุณาใส่ชื่อผู้ใช้นักเรียน</small>
            </div><div class="form-group">
                <label for="">รหัสผ่าน</label>
                <input type="text" class="form-control" name="stu_password" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">กรุณาใส่รหัสผ่านนักเรียน</small>
            </div>
            <button type="submit" class="btn btn-outline-success">บันทึก</button>
            <button type="reset" class="btn btn-danger">ยกเลิก</button>
            
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>