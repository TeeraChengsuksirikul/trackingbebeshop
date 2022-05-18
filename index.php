
<?php
    include('db_connect_host.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>bebeshop|tracking</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
     integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
        @media only screen and (max-width: 600px) {
            .logobebe-reponsive {
                width: 45%;
                height: auto;
                margin: 0px 110px -45px 110px;
            }
            .bgmain-reponsive {
                height: 600px;
                width: auto;             
                background-position: center;
                background-size:cover;
            }
        }
    </style>
    </head>
    <body>
        <div class="container-fluid header">
            <div class="row">
                <div class="container col-sm-2 " >
                    <a href="index"><img src="images/logobebe.png" id="logobebe" class="logobebe logobebe-reponsive" alt=""></a>
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 container" align="right">
                <h5 class="font_kanit">ติดต่อเรา<br><a href="tel:+66659245668">065-924-5668</a></h5>
                    <ul class="social">
                        <li> <a href="https://www.facebook.com/bebeshopofficial" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li> <a href="https://www.instagram.com/bebeshopth/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li> <a href="https://www.youtube.com/channel/UCP3wI4IQQuJ6sHZoT900MrQ" target="_blank"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
      </div>
      <div class="bgmain bgmain-reponsive">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 mb-1 font_kanit">
                    <h4 class="font_kanitb bgfont"><b>ติดตามพัสดุร้าน Bebeshop จากหมายเลขโทรศัพท์</b></h4>
                </div>
            </div>
            <form id = form_search method = "GET" action = "tracking">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6 input-group">
                        <input name="telephone_no" type="text" minlength="10" maxlength="10" class="form-control font_kanit" placeholder="กรอกหมายเลขโทรศัพท์ 10 หลัก" required>
                        <button class="btn btn-primary font_kanit" type="submit" value="">ค้นหา</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
  </body>
</html>