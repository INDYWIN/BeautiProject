<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css1.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
    <div class="container bg-light">
        <?php
        include "menu.php";
        ?>
        </br>
        <div class="card-deck">
            <div class="card text-white bg-primary mb-3" style="max-width: 8rem; max-height: 13rem;">
                <center>
                    <div class="card-header">ข้อมูลสมาชิกทั่วไป</div>
                    <i style="font-size:3rem;" class="ion-person"></i>
                    <h5 class="card-title"><button name="bt1" type="button" class="btn btn-outline-light">แสดง</button></h5>
                </center>
            </div>
            <div class="card text-white bg-primary mb-3" style="max-width: 8rem; max-height: 13rem;">
                <center>
                    <div class="card-header">ข้อมูลสมาชิก VIP</div>
                    <i style="font-size:3rem;" class="ion-card"></i>
                    <h5 class="card-title"><button name="bt2" type="button" class="btn btn-outline-light">แสดง</button></h5>
                </center>
            </div>
            <div class="card text-white bg-primary mb-3" style="max-width: 8rem; max-height: 13rem;">
                <center>
                    <div class="card-header">ข้อมูลพนักงาน</div>
                    <i style="font-size:3rem;" class="ion-scissors"></i>
                    <h5 class="card-title"><a href="create_beauti.php"><button name="bt3" type="button" class="btn btn-outline-light">แสดง</button></h5></a>    
                </center>
            </div>
            <div class="card text-white bg-primary mb-3" style="max-width: 8rem; max-height: 13rem;">
                <center>
                    <div class="card-header">บันทึกการทำงาน</div>
                    <i style="font-size:3rem;" class="ion-clipboard"></i>
                    <h5 class="card-title"><button name="bt4" type="button" class="btn btn-outline-light">แสดง</button></h5>
                </center>
            </div>
            <div class="card text-white bg-primary mb-3" style="max-width: 8rem; max-height: 13rem;">
                <center>
                    <div class="card-header">รายได้ต่อสัปดาห์</div>
                    <i style="font-size:3rem;" class="ion-cash"></i>
                    <h5 class="card-title"><button name="bt5" type="button" class="btn btn-outline-light">แสดง</button></h5>
                </center>
            </div>
        </div>



    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>