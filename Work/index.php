<?php session_start();
if(isset($_SESSION['is_logged_in'])){
  header('location: control.php');
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
  <title>Home</title>

  <!-- input fornt -->
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <!-- input bootstrap5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mali:wght@300&display=swap" rel="stylesheet">
  <link href="../day1/normalize.css" rel="stylesheet">
  <link href="main.css" rel="stylesheet">
</head>

<body>
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- navbar home -->


  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  mb-2 mb-lg-0" style="margin: 0 auto;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">CONTROL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"?>>DATA DRUG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">NOTIFICATION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com/%E0%B9%80%E0%B8%84%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%E0%B8%88%E0%B9%88%E0%B8%B2%E0%B8%A2%E0%B8%A2%E0%B8%B2%E0%B8%AA%E0%B8%A1%E0%B8%B2%E0%B8%97-%E0%B8%AA%E0%B8%AD%E0%B8%87%E0%B8%AA%E0%B8%B2%E0%B8%A7%E0%B8%A7%E0%B8%B4%E0%B8%A8%E0%B8%A7%E0%B8%B0%E0%B8%84%E0%B8%AD%E0%B8%A1-%E0%B8%A1%E0%B8%A7%E0%B8%A5-103498075417618/?ref=pages_you_manage"target="_blank">CONNECT WITH ME</a>
          </li>
        
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
 
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
               <li>
                <hr class="dropdown-divider">
              </li> 
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> -->

          <!-- <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li> -->
        </ul>

      </div>
    </div>
  </nav>

  <div class="container">
    <!--สร้างมีบัญชีไหม และล็อคอิน-->
    <div style=" display:flex; justify-content: flex-end;">
      <!-- <p style="margin-top: 10px; margin-right: 12px;">Don't you have account?</p> -->

      <!-- เมื่ออยู่หน้าโฮม คลิ๊ก sign up -->
      <!-- <button type="button" class="btn btn-outline-secondary" onclick="location.href='/Work/form.html'">SIGN UP</button> -->

    </div>
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body" >
           
          <?php  if(isset($_SESSION['err_fill'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
            <?php echo $_SESSION['err_fill']; ?>
         </div>
        <?php endif; ?>
        <?php  if(isset($_SESSION['err_uname'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
            <?php echo $_SESSION['err_uname']; ?>
         </div>
        <?php endif; ?>
        <?php  if(isset($_SESSION['err_pw'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
            <?php echo $_SESSION['err_pw']; ?>
         </div>
         <?php endif; ?>
            <!-- สร้างฟอร์มlogin ทางซ้าย-->
          <div style="display: flex; align-items: center;">
            <form style="flex-basis: 50%;" action="login_db.php" method="post">
              <h1 class="card-title ">Welcome Back</h1>
              <p class="card-text">Login your account</p>
              <div class="mb-3 ">
                <label for="username" class="form-label">Username</label>
                <input  type="text" name="username" id="username" placeholder="Enter your username"style="width: 100%;"  class="form-control"  aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password"id="password" placeholder="Enter your password" class="form-control">
              </div>

              <div class="mb-3">
               <p class="text-center">Is not a member? <a href="register.php">Register</a> </p>
              </div>

              <!-- สร้างbutton login เมื่อคลิ๊กให้ไปหน้าControl -->
              <!-- <button  class="button_login" onclick="location.href='control.php'"  ><a>Login</a> -->
           
                <!-- <a href="#">Forgot password?</a> -->
               <!-- </button> -->
 
              <button type="submit" class="button_login" name="submit"  >Login</button>
            </form>

            <!-- เพิ่มรูป ทางขวา-->
            <div style="flex-basis: 50%;">
              <img style="width: 100%; object-fit: cover;" src="img/logohome.jpg"class="imglogohome ms-auto" alt="...">
            </div>
          </div>

          </div>
        </div>

      </div>
    </div>
  </div>

       </body>

</html>
<?php
     if(isset($_SESSION['err_fill']) || isset($_SESSION['err_uname']) || isset($_SESSION['err_pw']) ){
        unset($_SESSION['err_fill']);
        unset($_SESSION['err_uname']);
        unset($_SESSION['err_pw']);
     
        
    }
?>