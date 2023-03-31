<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="shortcut icon" href="./images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
      .body{
        padding-top: 12px;
      }
      h1{
        padding-top: 12px;
        text-align: center;
      }
      .footer{
        display: grid;
        border: 1px solid #ccc;
        background-color: #f8f9fa;
        border-radius: 5px;
        text-align: center;
      }
      .sp{
        text-align: center;
      }
    </style>
</head>
<body>
    <div class="container">
    <?php
    if(isset($_POST['timkiem'])){
      $tukhoa = $_POST['tukhoa'];
    }else{
      $tukhoa = '';
    }
    $sql_sp = "SELECT * FROM  giay, loaigiay  WHERE giay.Maloai = loaigiay.Maloai  AND giay.Tengiay LIKE '%".$tukhoa."%'";//loaigiay.Tenloai LIKE '%" . $tukhoa . "%'";
         $query_sp = mysqli_query($conn,$sql_sp);
      ?> 
      <div class="body">
        <img src="./images/BST.png" class="img-fluid" alt="">
        <h1>Từ Khóa Tìm Kiếm: <?php echo $_POST['tukhoa'] ?></h1>
        <div class= "container-fluid">
          <!-- <h4>Complex Gallery</h4> -->
          <div class= "row d-inline-flex">
               <!-- Gallery Item 1 -->
               <?php
                  while($row_sp = mysqli_fetch_array($query_sp)){

               ?>
               
                  <div class ="col-12 col-sm-6 col-md-4 p-2">
                     <div class="d-flex flex-column text-center border height100">
                        <a href="index.php?quanly=giay&id=<?php echo $row_sp['Magiay']?>">
                           <div >
                              <img src="admincp/modules/qlsp/uploads/<?php echo $row_sp['Hinh']?>"  height = "300px"/>
                           </div>
                        </a>                        
                     </div>
                     <div class="sp">
                        <p> <b><?php echo $row_sp['Tengiay']?> </b></p>
                        <p><?php echo number_format($row_sp['Gia']).','.'VND'?></p>
                     </div>
                  </div>               


               <?php 
                  }
               ?>
          </div>
        </div>
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      </div>
</body>
</html>