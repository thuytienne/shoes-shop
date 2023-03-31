<?php
  session_start();
  include('../admincp/config/config.php');

  if (isset($_POST['dangnhap'])) {
      $tendangnhap = $_POST['tendangnhap'];
      $matkhau = md5($_POST['matkhau']);
      $sql = "SELECT * FROM nhanvien WHERE Tendangnhap = '".$tendangnhap."' AND Matkhau = '".$matkhau."' ";
      $query = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($query);
      if ($count > 0) {
          $_SESSION['dangnhap'] = $tendangnhap;
          header('location: index.php?action=qlloaisp&query=them');
      } else {
          // header('location: Dangnhap.php');
          echo '<script>alert("Tên Đăng Nhập Hoặc Mật Khẩu Không Đúng");</script>';
          header('Refresh: 1;url=login.php');
          
      }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng Nhập</title>
  <link rel="shortcut icon" href="./images/favicon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/style.css">
  <style>
    legend {
      text-align: center;
      color: cornflowerblue;
    }

    fieldset {
      background-color: #f8f9fa;
    }

    .main {
      margin-top: 50px;
      border: 2px solid steelblue;
    }
  </style>

</head>

<body>
  <div class="container">

    <div class="main">
      <article>
        <fieldset>
          <legend><b>Đăng Nhập</b></legend>
          <form autocomplete="off" action="" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
              <input type="text" class="form-control" name="tendangnhap" id="exampleInputEmail1" aria-describedby="emailHelp">
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
              <input type="password" class="form-control" name="matkhau" id="exampleInputPassword1">
            </div>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div> -->
            <button type="submit" name="dangnhap" class="btn btn-primary">Đăng Nhập</button>
            <button type="reset" class="btn btn-primary">Hủy</button>
          </form>
        </fieldset>
      </article>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  </div>
</body>

</html>