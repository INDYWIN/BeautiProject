<?php
if (isset($_POST['bt3'])) {
    $b3 = $_POST['bt3'];
    if ($b3) { ?>

        <table border="1" width=90% align="center" style="color: #000;">
            <tr>
                <td style="text-align: center;">ID</td>
                <td>User</td>
                <td>Password</td>
                <td>ชื่อ</td>
                <td>นามสกุล</td>
                <td>ขื่อเล่น</td>
                <td>อายุ</td>
                <td style="text-align: center;">วุฒิการศึกษา</td>
                <td style="text-align: center;">ประสบการณ์ทำงาน</td>
                <td style="text-align: center;">แก้ไข</td>
                <td style="text-align: center;">ลบ</td>
            </tr>
            <?php
            $sql = "SELECT * FROM employee ";
            $result = mysqli_query($conn_1, $sql);
            while ($user = mysqli_fetch_array($result)) {
            ?>

                <tr>
                    <td style="text-align: center;"><?php echo $user['ID']; ?></td>
                    <td><?php echo $user['User']; ?></td>
                    <td><?php echo $user['Password']; ?></td>
                    <td><?php echo $user['Name']; ?></td>
                    <td><?php echo $user['Last_Name']; ?></td>
                    <td><?php echo $user['Nick_Name']; ?></td>
                    <td><?php echo $user['Age']; ?></td>
                    <td style="text-align: center;"><?php echo $user['Education']; ?></td>
                    <td style="text-align: center;"><?php echo $user['Experience']; ?></td>
                    <td style="text-align: center;"><?php echo "<a href='empform.php?idem=$user[0]'>แก้ไข</a>"; ?></td>
                    <td style="text-align: center;"><?php echo "<a href='Delete.php?idem=$user[0]' onclick=\"return confirm('ยืนยันการลบ')\">ลบ</a>"; ?></td>

                </tr>
    <?php
            }
        }
    }
    ?>