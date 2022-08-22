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
                <a class="nav-link" href="home.php">หน้าหลัก <span class="sr-only">(current)</span></a>
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
            <a href="login.php"><button type="button" class="btn btn-outline-success">เข้าสู่ระบบ</button></a>
            <a href="register.php"><button type="button" class="btn btn-primary">สมัครสมาชิก</button></a>
        </form>
    </div>
</nav>