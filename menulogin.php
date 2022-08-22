<?php
include 'config.php';
$iduser = mysqli_real_escape_string($conn_1, $_GET['iduser']);
$sqli = "SELECT * FROM user_n WHERE ID ='$iduser'";
$mysqli = mysqli_query($conn_1, $sqli);
$fecth = mysqli_fetch_array($mysqli);
?>
<style>
    .circle {
  width: 20%;
  height: 20%;
  border: solid 2px #8a8a8a;
  border-radius: 100%;
}

</style>
<nav class="navbar navbar-expand-sm navbar-light bg-light shadow p-3 mb-1">
    <nav class="navbar-light bg-light">
        <a class="navbar" href="home.php">
            <img src="img/1.png" width="45" height="45" alt="Home">
        </a>
    </nav>
    <a class="navbar-brand" href="#"><B>BEAUTI Ubon</B></a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" <?php echo "<a href='homelogin.php?iduser=$iduser[0]'" ?>>หน้าหลัก<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ระบบพนักงาน</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="registerEM.php">สมัครเป็นพนักงาาน</a>
                    <a class="dropdown-item" href="loginEM.php">เข้าระบบของพนักงาน</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ติดต่อสอบถาม</a>
            </li>
        </ul>
        <form class="my-2 my-lg-0">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="font-size: 30px;" class="ion-navicon"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId" style="right: 0%; left: auto; padding: unset;">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                
                                <h5 class="card-title">
                                <img class="circle" src="imgs/<?php echo $fecth['img_user']; ?>" alt=""> ชื่อ : <?php echo $fecth['User_Name']; ?></h5>
                                <a href="profile.php" onclick="return confirm('ต้องการออกจากระบบ?')"><button type="button" class="btn btn-primary">โปรไฟล์</button></a>
                                <a href="home.php" onclick="return confirm('ต้องการออกจากระบบ?')"><button type="button" class="btn btn-danger">ออกจากระบบ</button></a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>


        </form>
    </div>
</nav>