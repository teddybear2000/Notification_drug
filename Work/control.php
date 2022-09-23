<?php
session_start();
if(!isset($_SESSION['is_logged_in'])){
  header('location: index.php');
  exit;
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>CONTROL</title>

  <!-- input fornt -->
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <!-- input bootstrap5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mali:wght@300&display=swap" rel="stylesheet">
  <!-- <link href="../day1/normalize.css" rel="stylesheet"> -->
  <link href="main.css" rel="stylesheet">
</head>

<body >
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
 
  <!-- navbar -->
 <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid"  >

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  mb-2 mb-lg-0" style="margin: 0 auto;">
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/Work/index.html">HOME</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">CONTROL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_drug.php">DATA DRUG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">NOTIFICATION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com/%E0%B9%80%E0%B8%84%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%E0%B8%88%E0%B9%88%E0%B8%B2%E0%B8%A2%E0%B8%A2%E0%B8%B2%E0%B8%AA%E0%B8%A1%E0%B8%B2%E0%B8%97-%E0%B8%AA%E0%B8%AD%E0%B8%87%E0%B8%AA%E0%B8%B2%E0%B8%A7%E0%B8%A7%E0%B8%B4%E0%B8%A8%E0%B8%A7%E0%B8%B0%E0%B8%84%E0%B8%AD%E0%B8%A1-%E0%B8%A1%E0%B8%A7%E0%B8%A5-103498075417618/?ref=pages_you_manage"target="_blank">CONNECT WITH ME</a>
          </li>
          <li class="nav-item">
          <a style="color: red;" class="nav-link"  href="logout.php">LOGOUT</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <div class="container mt-5" style="background-color: pink;">

    <div class="row mt-2">
      <div class="col-md-12">
        <div class="card" >
          <div class="card-body">
           
            <!-- สร้างฟอร์มlogin ทางซ้าย-->
          <div style="display: flex; align-items: center;">
            <form style="flex-basis: 50%;" method="post" action="control_db.php">
              <h1 class="card-title ">Control</h1>
              <label for="channel" class="form-label">Channel(เลือกช่องยา)</label>
              <div class="mb-3 ">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="channel" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="channel" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="channel" id="inlineRadio2" value="3">
                    <label class="form-check-label" for="inlineRadio3">3</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="channel" id="inlineRadio2" value="4">
                    <label class="form-check-label" for="inlineRadio4">4</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="channel" id="inlineRadio2" value="5">
                    <label class="form-check-label" for="inlineRadio5">5</label>
                  </div>
              </div>
 
              <div class="mb-3 ">
                <label for="namedrug" class="form-label">Name Drug</label>
                <input  type="text" id="namedrug" placeholder="ใส่ชื่อยา" name="drug_name" style="width: 100%;"  class="form-control" required  aria-describedby="emailHelp">
              </div>

              <div class="mb-3 ">
                <label for="settime" class="form-label">Set Time</label>
                <input  type="time" id="settime"style="width: 100%;" name="time"  class="form-control" required  aria-describedby="emailHelp">
              </div>
              <a>การรับประทานยา</a>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="time_to_eat" value="before"  id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">ก่อนอาหาร</label>
              </div>

              <div class="form-check ">
                <input class="form-check-input" type="radio" name="time_to_eat" value="after" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">หลังอาหาร</label>
              </div>

              <div class="mb-3 ">
                <label for="settime" class="form-label">Exp Date</label>
                <input  type="date" id="settime"style="width: 100%;" name="exp" required  class="form-control"  aria-describedby="emailHelp">
              </div>


            
              <!--  เมื่อคลิ๊ก ยกเลิก ให้ไปหน้าData Drug เพื่อโชว์ข้อมูลที่กรอกก่อนหน้า -->
              <!-- <button  class="button_login1" onclick="location.href='control.php'"  ><a>ยกเลิก</a> -->

                <!--  เมื่อคลิ๊ก บันทึก ให้บันทึกข้อมูลไว้ -->
              <button type="submit" name="submit" class="button_login2">บันทึก
              </button>
 
            </form>
           

            <!-- เพิ่มรูป ทางขวา-->
            <div style="flex-basis: 50%;">
              <img style="width: 100%; object-fit: cover;" src="/Work/img/imgcon.jpg" class="imglogohome ms-auto" alt="...">
            </div>
          </div>

          </div>
        </div>

      </div>
    </div>
  </div>
    
       </body>

</html>
<!--  -->