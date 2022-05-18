
<?php
    include('db_connect_host.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>bebeshop | tracking</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
        @media only screen and (max-width: 600px) {
            .logobebe {
                width: 45%;
                height: auto;
                margin: 0px 110px -45px 110px;
            }
            .bgmain {
                height: 600px;
                width: auto;             
                background-position: center;
                position: fixed;
                background-size:cover;
            }
        }
    </style>
    </head>
    <body>
    <?php
        
        $telephone_no = $_GET["telephone_no"];
            if(!isset($telephone_no)!=''){ ?>
              <script language="JavaScript">
                window.open("index", "_parent");
              </script>  
             <?php //$where_condition.= " AND (tel LIKE '%".$search."%')";
            }

            $sql = "SELECT * 
                    FROM tracking  
                    WHERE 1=1 AND (telephone_no LIKE '%".$telephone_no."%')";
                    
            $result = $conn->query($sql);
            $row = mysqli_fetch_array($result);
            $date = $row['date'];
        ?>
      <div class="container-fluid header">
            <div class="row">
                <div class="container col-sm-2" >
                <a href="index"><img src="images/logobebe.png" id="logobebe" class="logobebe" alt=""></a>
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
      <div class="bgmain">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-3"></div>
                  <div class="col-sm-6 mb-1 font_kanit">
                    <h4 class="font_kanitb bgfont"><b>ติดตามพัสดุร้าน Bebeshop จากหมายเลขโทรศัพท์</b></h4>
                </div>
            </div>
            <div class="container">
              <form id = form_search method = "GET" action = "tracking">
                  <div class="row">
                      <div class="col-sm-3"></div>
                      <div class="col-sm-6 input-group">
                          <input name="telephone_no" type="text" minlength="10" maxlength="10" class="form-control font_kanit" placeholder="หมายเลขโทรศัพท์ 10 หลัก" value="<?php echo $telephone_no ?>" required>
                          <button class="btn btn-primary font_kanit" type="submit" value="">ค้นหา</button>
                      </div>
                  </div>
              </form>
            </div>
            <?php
                if($telephone_no!='' && $row!=0 ){ ?>
            <div class="container table-responsive mt-5 ">
            <table class="container col-sm-12 table table-hover table-bordered table font_kanit">
              <thead class="table-primary text-body table-header">
                  <tr>
                      <td>วันที่</td>
                      <td>เลขพัสดุ</td>
                      <td>สินค้า</td>
                      <td>ลูกค้า</td>
                      <td>จัดส่งโดย</td>
                      <td></td>                          
                  </tr>
              </thead>
              <?php foreach($result as $row) { ?>
              <tbody class="table-sm table-striped table-dark font_kanit">                   
                  <tr>
                      <td class="font_kanit"><?php echo $date;?></td>                  
                      <td class="font_kanit"><?php echo $row['tracking_no'];?> </td>                  
                      <td class="font_kanit"><?php echo $row['product_name'];?> </td>
                      <td class="font_kanit"><?php echo $row['customer_name'];?> </td>
                      <td class="font_kanit"><?php echo $row['shipment'];?></td>
                      <td><?php
                          $supply = $row['shipment'];

                          switch ($supply) {
                            case "Kerry":
                              ?> <a href="https://th.kerryexpress.com/th/track/?track=<?php echo $row['tracking_no'];?>" id="ch_kerry" name="ch_kerry" target="_blank" type="button" class="btn btn-primary btn-sm" value="">เช็คพัสดุ</a>
                              <?php
                              break;
                            case "DHL":
                              ?> <a href="https://www.dhl.com/th-th/home/tracking.html?tracking-id=<?php echo $row['tracking_no'];?>" id="ch_dhl" name="ch_dhl" type="button" target="_blank" class="btn btn-primary btn-sm">เช็คพัสดุ</a>
                              <?php
                              break;
                            case "jnt":
                              ?> <a href="https://www.jtexpress.co.th/index/query/gzquery.html?bills=<?php echo $row['tracking_no'];?>" id="ch_jnt" name="ch_jnt" type="button" target="_blank" class="btn btn-primary btn-sm">เช็คพัสดุ</a>
                              <?php
                              break;
                            case "flash":
                              ?> <a href="https://www.flashexpress.co.th/tracking/?se=<?php echo $row['tracking_no'];?>" type="button" id="ch_flash" name="ch_flashs" target="_blank" class="btn btn-primary btn-sm">เช็คพัสดุ</a>
                              <?php
                              break;
                            default:
                              echo "data not found";
                          }
                      ?>
                      </td>
                  </tr>
                  <?php } 
                }else{?>
                  <div class="container  font_kanit col-sm-8 mt-5 alert alert-danger alert-dismissible fade show">
                    <strong>ไม่พบข้อมูล !</strong>&nbsp;&nbsp;&nbsp;กรุณาตรวจสอบหมายเลขโทรศัพท์ให้ถูกต้องอีกครั้ง
                  </div>
                  <?php
                  }
                  ?>
              </tbody>
            </table>
            </div>
        </div>
      </div>           
  </body>
</html>