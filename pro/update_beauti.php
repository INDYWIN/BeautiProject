<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <section class="content">
        <div class="container">
        <div class="user-info">
        <div class="user-info__img">
        <img id="pictureUrl" width="25%">
                                    </div>
                                    <div class="user-info__basic">
                                        <h5 class="mb-0" id="displayName"></h5>
                                        <p class="text-muted mb-0" id="getDecodedIDToken"></p>
                                    </div>                                                    
        </div>
       
        <br/>
            <center>
                <div class="alert alert-success" role="alert">
                    Update_Beauti
                </div>
            </center>

            <div class="row">
                
                <?php
                include('connect.php');
                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                
                

                isset( $_GET['id'] ) ? $get_id = $_GET['id'] : $get_id = "";
                $sql = "SELECT * FROM beauti WHERE Beauti_ID = '$get_id'";
                $result = $conn->query($sql);
                $row = mysqli_fetch_array($result);

                ?>
                
                <!-- Form add tour -->
                <form style="width: 300px;" method="POST" action="update.php">
                <div class="card bg-white p-3 mb-4 shadow" style="width: 1140px">
                    <div class="form-group">
                        <label for="ID_beauti">รหัสพนักงาน</label>
                        <input type="text" class="form-control w-300" id="form-Ticket" name="ID_beauti" value="<?php echo $row['Beauti_ID']?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="Input-Name">ชื่อพนักงาน</label>
                        <input type="text" class="form-control w-300" id="form-Ticket" name="Input-name" value="<?php echo $row['Beauti_name']?>" require>
                    </div>
                    <div class="form-group">
                        <label for="Input-Price">ราคา</label>
                        <input type="text" class="form-control" id="form-Price" name="Input-Price" value="<?php echo $row['Beauti_price']?>" require>
                    </div>
                    <div class="form-group">
                        <label for="Input-detail">ข้อมูล</label>
                        <input type="text" class="form-control" id="form-detail" name="Input-detail" value="<?php echo $row['Beauti_detail']?>" require>
                    </div>
                    <div class="form-group">
                        <label for="Input-Time">เวลา</label>
                        <input type="time" class="form-control" id="form-Time" name="Input-Time" value="<?php echo $row['Beauti_time']?>" require>
                    </div>
                    <div class="form-group">
                        <label for="Input-Date">วันที่</label>
                        <input type="date" class="form-control" id="form-Date" name="Input-Date" value="<?php echo $row['Beauti_date']?>" require>
                    </div>
                    <div class="form-group">
                        <label id="lb_ticket" for="Input-number">จำนวน</label>
                        <input id="Input-number" type="text" class="form-control" id="form-seat" name="Input-number" value="<?php echo $row['Beauti_number']?>" require>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">ตกลง</button>
                    <a href="index.php" type="button" class="btn btn-danger">ยกเลิก</a>
                </form>
            </div>

        </div>
        
    </section>
<script src="JS/status.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>