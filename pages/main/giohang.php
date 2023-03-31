<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thúy Tiên Shoes</title>
  <link rel="shortcut icon" href="../../images/favicon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../../css/style.css">
  <style>
    .body {
      padding-top: 12px;
    }

    h1 {
      padding-top: 12px;
      text-align: center;
    }

    .footer {
      display: grid;
      border: 1px solid #ccc;
      background-color: #f8f9fa;
      border-radius: 5px;
      text-align: center;
      padding-top: 10px;
    }

    .sp {
      text-align: center;
    }

    table,
    th,
    td {
      border: 1px solid black;
    }
    a{
      text-decoration: none;
    }
  </style>
</head>

<body>
<?php
// session_start();
include("../../admincp/config/config.php");
  if (isset($_GET['dangxuat'])){
    unset($_SESSION['dangki']);
    echo '<script>alert("Đăng Xuất Thành Công");</script>';
    header('Refresh: 1;url=index.php');
    // header('location: index.php');
  }
?>
<nav class="navbar navbar-expand-lg bg-light" id="nav">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="../../images/logo.png" width="55px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active nav" id="color" aria-current="page" href="../../index.php?quanly=trangchu"><i class="bi bi-house-door-fill home"></i></a>
              </li>

              <?php
                $sql_loai = "SELECT * FROM loaigiay lg, gioitinh gt WHERE lg.Magt = gt.Magt AND lg.Magt = '1'";
                $query_loai = mysqli_query($conn,$sql_loai);
              ?> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav" href="../../index.php?quanly=nam" id="color"> Nam </a>
                <ul class="dropdown-menu subnav">
                  <?php
                    while($row_loai = mysqli_fetch_array($query_loai)){
                  ?>
                    <!-- <li><a class="dropdown-item" href="index.php?quanly=boot">Giày Tây</a></li> -->
                    <li value=""><a class="dropdown-item" href="../../index.php?quanly=qloai&id=<?php echo $row_loai['Maloai']  ?>"> <?php echo $row_loai['Tenloai'] ?></a></li>

                    <?php
                      }
                    ?>
                </ul>
              </li>
              <?php
                $sql_loai = "SELECT * FROM loaigiay lg, gioitinh gt WHERE lg.Magt = gt.Magt AND lg.Magt = '2'";
                $query_loai = mysqli_query($conn,$sql_loai);
              ?> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav" href="../../index.php?quanly=nu" id="color"> Nữ </a>
                <ul class="dropdown-menu subnav">
                <?php
                    while($row_loai = mysqli_fetch_array($query_loai)){
                  ?>
                    <li><a class="dropdown-item" href="../../index.php?quanly=qloai&id=<?php echo $row_loai['Maloai']  ?>"><?php echo $row_loai['Tenloai'] ?></a></li>
                    <?php
                      }
                    ?>
                </ul>
              </li>

              <!-- <li class="nav-item">
                <a class="nav-link active nav" id="color" aria-current="page" href="index.php?quanly=dangnhap">Đăng Nhập</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link active nav" id="color" aria-current="page" href="../../index.php?quanly=dangky">Đăng Ký</a>
              </li>
              <li class="nav-item">
              <?php
                if(isset($_SESSION['dangki'])){

              ?>
              <li class="nav-item">
                <a class="nav-link active nav" id="color" aria-current="page" href="../../index.php?dangxuat=1">Đăng Xuất</a>
              </li>
            </ul>
              <?php
                }else{
              ?>
              <li class="nav-item">
                <a class="nav-link active nav" id="color" aria-current="page" href="../../index.php?quanly=dangnhap">Đăng Nhập</a>
              </li>
              <?php
                }
              ?>
              </li>
          </div>
              <form class="d-flex" role="search" action="index.php?quanly=timkiem" method="post" style="float: right">
                <input class="form-control me-2" name="tukhoa" type="search" placeholder="Search" aria-label="Search">
                <!-- <button class="btn btn-outline-success" type="submit"> -->
                    <div class="btn btn-outline-success">
                      <!-- <a href="index.php?quanly=timkiem"> -->
                        <!-- <i class="fas fa-search icon-while" id="color"></i> -->
                        <input type="submit" class="fas fa-search icon-while" id="color" name="timkiem" value="Tìm Kiếm">
                      <!-- </a> -->
                    </div>
              </form>
              <form class="d-flex" role="search">
                <div class="btn btn-outline-success">
                <!-- </button> -->
                <a href="pages/main/giohang.php">
                  <!-- <button class="btn btn-outline-success"> -->
                    <i class="fas fa-shopping-cart" id="color"> </i> 
                  <!-- </button> -->
                </a>                  
                </div>

            </form>          
        </div>
      </nav>
  <h1>GIỎ HÀNG</h1>
  <h2>
    <?php
      // if(isset($_SESSION['dangki'])){
      //   echo $_SESSION['idkh'];
      // }
      
      ?>
  </h2>

  <div class="body">
    <?php
    if (isset($_SESSION['cart'])) {
      // print_r($_SESSION['cart']);
    }
    ?>
    <table style="width:100%">

      <tr>
        <th>STT</th>
        <th>Mã Sản Phẩm</th>
        <th>Tên Sản Phẩm</th>
        <th>Hình Ảnh</th>
        <th>Giá</th>
        <th>Số Lượng</th>
        <th>Thành Tiền</th>
        <th>Quản Lý</th>
      </tr>
      <?php
      if (isset($_SESSION['cart'])) {
        $i = 0;
        $tongtien = 0;
        foreach ($_SESSION['cart'] as $cart_item) {
          $thanhtien = $cart_item['soluong'] * $cart_item['Gia'];
          $tongtien += $thanhtien;
          $i++;
      ?>
      <tr>
        <td style="text-align: center;">
          <?php echo $i; ?>
        </td>
        <td style="text-align: center;">
          <?php echo $cart_item['id'] ?>
        </td>
        <td style="text-align: center;">
          <?php echo $cart_item['Tengiay']; ?>
        </td>
        <td style="text-align: center;"><img src="../../admincp/modules/qlsp/uploads/<?php echo $cart_item['hinh'] ?>"
            width="100px"></td>
        <td style="text-align: center;">
          <?php echo number_format($cart_item['Gia']) . ',' . 'VND'; ?>
        </td>
        <td style="text-align: center;">
          <a href="themgiohang.php?tru=<?php echo $cart_item['id'] ?>"
            style="border: 1px solid #ccc; background-color: beige; color: black; text-align: center;">-</a>
          <?php echo $cart_item['soluong']; ?>
          <a href="themgiohang.php?cong=<?php echo $cart_item['id'] ?>"
            style="border: 1px solid #ccc; background-color: beige; color: black; text-align: center;">+</a>
        </td>
        <td style="text-align: center;">
          <?php echo number_format($thanhtien) . ',' . 'VND' ?>
        </td>
        <td style="text-align: center;"><a href="themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"
            style="border: 1px solid #ccc; background-color: beige; color: black; ">Xóa</a></td>

      </tr>
      <?php
        }
      ?>
      <tr>
        <td colspan="8">
          <p style="float: left;"><b>Tổng Tiền:
              <?php echo number_format($tongtien) . ',' . '000' . 'VND' ?>
            </b> </p>
          <p style="float: right;"> <a href="themgiohang.php?xoatatca=1"
              style="border: 1px solid #ccc; background-color: beige; color: black; ">Xóa Tất Cả</a></p>
          <?php
        if (isset($_SESSION['dangki'])) {
          ?>
          <p style="text-align: center; padding: 10px;;"><a href="thanhtoan.php"
              style="border: 1px solid #ccc; background-color: beige; color: black; text-align: center;"> Đặt Hàng</a>
          </p>
          <?php
        } else {
          ?>
          <p style="text-align: center; padding: 10px;;"><a href="../../pages/main/dangky.php"
              style="border: 1px solid #ccc; background-color: beige; color: black; text-align: center;">Đăng Ký Đặt
              Hàng</a>
          </p>
          <?php
        }

          ?>
        </td>
      </tr>
      <?php
      } else {
      ?>
      <tr>
        <td colspan="8" style="text-align: center;">
          <p> <b>Giỏ Hàng Rỗng</b> </p>
        </td>
      </tr>
      <?php
      }
      ?>
    </table>

  </div>
  <div class="footer">
    <p>
    <h5>Thúy Tiên shoes</h5>
    </p>
    <p><i class="bi bi-phone-vibrate-fill"></i>0868.404.261</p>
    <p><i class="bi bi-geo-alt-fill"></i>3/2 street, Xuân Khánh ward, Ninh Kiều district, Cần Thơ city</p>
  </div>
</body>

</html>