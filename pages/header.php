<?php
session_start();
  if (isset($_GET['dangxuat'])){
    unset($_SESSION['dangki']);
    echo '<script>alert("Đăng Xuất Thành Công");</script>';
    header('Refresh: 1;url=index.php');
    // header('location: index.php');
  }
?>
<nav class="navbar navbar-expand-lg bg-light" id="nav">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="./images/logo.png" width="55px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active nav" id="color" aria-current="page" href="index.php?quanly=trangchu"><i class="bi bi-house-door-fill home"></i></a>
              </li>

              <?php
                $sql_loai = "SELECT * FROM loaigiay lg, gioitinh gt WHERE lg.Magt = gt.Magt AND lg.Magt = '1'";
                $query_loai = mysqli_query($conn,$sql_loai);
              ?> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav" href="index.php?quanly=nam" id="color"> Nam </a>
                <ul class="dropdown-menu subnav">
                  <?php
                    while($row_loai = mysqli_fetch_array($query_loai)){
                  ?>
                    <!-- <li><a class="dropdown-item" href="index.php?quanly=boot">Giày Tây</a></li> -->
                    <li value=""><a class="dropdown-item" href="index.php?quanly=qloai&id=<?php echo $row_loai['Maloai']  ?>"> <?php echo $row_loai['Tenloai'] ?></a></li>

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
                <a class="nav-link dropdown-toggle nav" href="index.php?quanly=nu" id="color"> Nữ </a>
                <ul class="dropdown-menu subnav">
                <?php
                    while($row_loai = mysqli_fetch_array($query_loai)){
                  ?>
                    <li><a class="dropdown-item" href="index.php?quanly=qloai&id=<?php echo $row_loai['Maloai']  ?>"><?php echo $row_loai['Tenloai'] ?></a></li>
                    <?php
                      }
                    ?>
                </ul>
              </li>

              <!-- <li class="nav-item">
                <a class="nav-link active nav" id="color" aria-current="page" href="index.php?quanly=dangnhap">Đăng Nhập</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link active nav" id="color" aria-current="page" href="index.php?quanly=dangky">Đăng Ký</a>
              </li>
              <li class="nav-item">
              <?php
                if(isset($_SESSION['dangki'])){

              ?>
              <li class="nav-item">
                <a class="nav-link active nav" id="color" aria-current="page" href="index.php?dangxuat=1">Đăng Xuất</a>
              </li>
            </ul>
              <?php
                }else{
              ?>
              <li class="nav-item">
                <a class="nav-link active nav" id="color" aria-current="page" href="index.php?quanly=dangnhap">Đăng Nhập</a>
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