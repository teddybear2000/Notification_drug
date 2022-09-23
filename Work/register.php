<?php session_start();
if(isset($_SESSION['is_logged_in'])){
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
    <title>Login</title>
     <!-- input bootstrap5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

     <!-- input fornt -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
      <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
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
            <a class="nav-link" href="#">DATA DRUG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">NOTIFICATION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com/%E0%B9%80%E0%B8%84%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%E0%B8%88%E0%B9%88%E0%B8%B2%E0%B8%A2%E0%B8%A2%E0%B8%B2%E0%B8%AA%E0%B8%A1%E0%B8%B2%E0%B8%97-%E0%B8%AA%E0%B8%AD%E0%B8%87%E0%B8%AA%E0%B8%B2%E0%B8%A7%E0%B8%A7%E0%B8%B4%E0%B8%A8%E0%B8%A7%E0%B8%B0%E0%B8%84%E0%B8%AD%E0%B8%A1-%E0%B8%A1%E0%B8%A7%E0%B8%A5-103498075417618/?ref=pages_you_manage"target="_blank">CONNECT WITH ME</a>
          </li>
          
          <li>
          <a style="color: red;" class="nav-link"  type="submit" name="submit" href="logout.php">LOGOUT</a>
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


    <!-- post เพิ่มข้อมูล -->
    <div class="register-form" >
     <form action="register_db.php"  method="post">
        <img src="/Work/img/avatar-1.PNG" alt="">
        <h1>Sign Up</h1>

         <?php  if(isset($_SESSION['err_fill'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
            <?php echo $_SESSION['err_fill']; ?>
         </div>
        <?php endif; ?>

        <?php  if(isset($_SESSION['err_pw'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
            <?php echo $_SESSION['err_pw']; ?>
         </div>
        <?php endif; ?>

        <?php  if(isset($_SESSION['exist_uname'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
            <?php echo $_SESSION['exist_uname']; ?>
         </div>
        <?php endif; ?>

        <?php  if(isset($_SESSION['err_insert'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
            <?php echo $_SESSION['err_insert']; ?>
         </div>
        <?php endif; ?>
            
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Enter your username">

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password">
        
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Enter your password">

        <input type="submit"  name="submit" value="Sign up">
        
     </form>
    </div>
     
</html>
<?php
     if(isset($_SESSION['err_fill']) || isset($_SESSION['err_pw']) || isset($_SESSION['exist_uname']) || isset($_SESSION['err_insert'])){
        unset($_SESSION['err_fill']);
        unset($_SESSION['err_pw']);
        unset($_SESSION['exist_uname']);
        unset($_SESSION['err_insert']);
     
    }
?>