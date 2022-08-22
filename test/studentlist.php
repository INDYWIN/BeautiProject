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
        <h3>ผลข้อมูลนักเรียน</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ลำดับ</th>
                    <th scope="col">ชื่อ</th>
                    <th scope="col">นามสกุล</th>
                    <th scope="col">ที่อยู่</th>
                    <th scope="col">หมายเลขโทรศัพท์</th>
                    <th scope="col">แก้ไข</th>
                    <th scope="col">ลบ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "config.php";
                $sql = "SELECT * FROM student WHERE stu_name LIKE '%".$_POST['search']."%'";
                $result = mysqli_query($conn,$sql);

                while ($row = mysqli_fetch_assoc($result)){
                
                ?>
                <tr>
                    <th scope="row"><?php echo $row['stu_id']; ?></th>
                    <td><?php echo $row['stu_name']; ?></td>
                    <td><?php echo $row['stu_lastname']; ?></td>
                    <td><?php echo $row['stu_address']; ?></td>
                    <td><?php echo $row['stu_tel']; ?></td>
                    <td><a href="studentedit.php?stu_id=<?php echo $row['stu_id']; ?>"><button type="submit" class="btn btn-outline-warning">แก้ไข</button></a></td>
                    <td><a href="studentdel.php?stu_id=<?php echo $row['stu_id']; ?>"><button type="submit" class="btn btn-outline-danger">ลบ</button></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>