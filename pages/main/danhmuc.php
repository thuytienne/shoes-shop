<?php
         $sql_sp = "SELECT * FROM  giay  WHERE Maloai = '$_GET[id]' ORDER BY Maloai DESC";
         $query_sp = mysqli_query($conn,$sql_sp);
         $sql_loai = "SELECT * FROM loaigiay WHERE Maloai = '$_GET[id]' LIMIT 1";
         $query_loai = mysqli_query($conn,$sql_loai);
         $row_title = mysqli_fetch_array($query_loai);
      ?> 
      <link rel="stylesheet" href="../css/style.css">
      <div class="container">
         <img src="./images/BST.png" class="img-fluid" alt="">
         <h1><?php echo $row_title['Tenloai']  ?></h1>
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
