<?php
if (isset($_POST['bt1'])) {
    $b1 = $_POST['bt1'];
    if ($b1) { ?>

        <table border="1" width=90% align="center" style="color: #000;">
            <tr>
                <td style="text-align: center;">ID</td>
                <td>UserName</td>
                <td>Password</td>
                <td style="text-align: center;">แก้ไข</td>
                <td style="text-align: center;">ลบ</td>
            </tr>
            <?php
            $sql = "SELECT * FROM user_n ";
            $result = mysqli_query($conn_1, $sql);
            while ($user = mysqli_fetch_array($result)) {
            ?>

                <tr>
                    <td style="text-align: center;"><?php echo $user['ID']; ?></td>
                    <td><?php echo $user['User_Name']; ?></td>
                    <td><?php echo $user['Password']; ?></td>
                    <td style="text-align: center;"><?php echo "<a href='userform.php?iduser=$user[0]'>แก้ไข</a>"; ?></td>
                    <td style="text-align: center;"><?php echo "<a href='Delete.php?iduser=$user[0]' onclick=\"return confirm('ยืนยันการลบ')\">ลบ</a>"; ?></td>

                </tr>
    <?php
            }
        }
    }
    ?>