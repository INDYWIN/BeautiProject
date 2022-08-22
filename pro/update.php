<?php
    include 'connect.php';
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Update ticket
    $name_ticket = $_POST['Input-name'];
    $price_ticket = $_POST['Input-Price'];
    $detail_ticket = $_POST['Input-detail'];
    $time_ticket = $_POST['Input-Time'];
    $date_ticket = $_POST['Input-Date'];
    $ticket = $_POST['Input-number'];
    isset( $_POST['ID-number'] ) ? $id = $_POST['ID-number'] : $id = "";

    $sql = "SELECT * FROM beauti WHERE Beauti_ID = '$id'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);

    $update = "UPDATE beauti
        SET Beauti_name='$name_ticket',
        Beauti_price='$price_ticket',
        Beauti_detail='$detail_ticket',
        Beauti_number='$ticket',
        Beauti_time='$time_ticket',
        Beauti_date='$date_ticket'
        WHERE Beauti_ID='$id'";
    $result = $conn->query($update);

    if($result){
        if($row['Beauti_number'] == 0){
            $status_seat = "UPDATE beauti SET Beauti_status = 2 WHERE Beauti_ID = $id";
            $result = $conn->query($status_seat);
        }
        else{
            $status_seat = "UPDATE beauti SET Beauti_status = 1 WHERE Beauti_ID = $id";
            $result = $conn->query($status_seat);
        }
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ')</script>";
        header('Refresh: 0; url=dashboard.php');
    }
    else{
        echo "<script>alert('แก้ไขข้อมูลผิดพลาด')</script>";
        header('Refresh: 0; url=home.php');
    }
?>