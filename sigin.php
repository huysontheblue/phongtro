<?php
    session_start();
    require 'connect.php';
    $err = "";
    if(isset($_POST["submit"])){
        $user =  $_POST["username"];
        $pass =  $_POST["password"];
        $password_confim =  $_POST["password_confim"];
        $email =  $_POST["email"];
        $phone =  $_POST["phone"];
        $name =  $_POST["name"];
        $query = "INSERT INTO `user`( `name`, `username`, `password`, `role`, `phone`, `avata`, `email`, `status`)
        VALUES (N'".$name."','".$user."','".md5($pass)."',0,'".$phone."','https://datxanhhatinh.com/wp-content/uploads/2020/06/46315527.jpg','".$email."',1)";
        $result = mysqli_query($connect,$query);
        if($result){
            header("Location: index.php");
        }
        else{
            echo "Thất bại".mysql_error($connect);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Đăng ký tài khoản</title>
</head>
<body>
<section class="vh-100" style="background-color: #9a616dm, ;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng ký tài khoản</p>
                <form action="sigin.php" method="POST" class="mx-1 mx-md-4">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" class="form-control" name="username" placeholder="Tên đăng nhập"/>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="password" placeholder="Mật khẩu" class="form-control" />
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="password_confim" placeholder="Nhập lại mật khẩu" class="form-control" />
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="email" placeholder="Email" class="form-control" />
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-solid fa-mobile-button fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="phone" placeholder="Phone" class="form-control" />
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-solid fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input  type="text" name="name" placeholder="Nhập tên" class="form-control" />
                    </div>
                  </div>
                  <div class="form-check d-flex justify-content-center mx-4 mb-2">
                    <a class="small text-muted" href="index.php">Đăng nhập</a>
                  </div>
                  <div class="d-flex justify-content-center mx-4 mb-lg-4">
                    <button type="submit" name="submit" value="Đăng ký" class="btn btn-primary btn-lg">Đăng ký</button>
                  </div>
                </form>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                <img src="./assets/img/draw1.webp"
                  class="img-fluid" alt="Sample image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>