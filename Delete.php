<?php
include 'config.php';

if (isset($_GET['iduser'])) {
    $iduser = $_GET['iduser'];
    $sq = "DELETE FROM user_n WHERE ID ='$iduser'";
    $sql = mysqli_query($conn_1,$sq);

    if ($sql) {
        echo "<script>";
        echo "alert('ลบสำเร็จ');";
        echo "window.location='dashboard.php';";
        echo "</script>";
    }
    else {
        echo "<script>";
        echo "alert('ผิดพลาด');";
        echo "</script>";
    }
}
if (isset($_GET['idem'])) {
    $idem = $_GET['idem'];
    $sq = "DELETE FROM employee WHERE ID ='$idem'";
    $sql = mysqli_query($conn_1,$sq);

    if ($sql) {
        echo "<script>";
        echo "alert('ลบสำเร็จ');";
        echo "window.location='dashboard.php';";
        echo "</script>";
    }
    else {
        echo "<script>";
        echo "alert('ผิดพลาด');";
        echo "</script>";
    }
}
?>