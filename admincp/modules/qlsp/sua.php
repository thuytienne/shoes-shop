<?php
    $sql_sua = "SELECT * FROM giay WHERE Magiay =' $_GET[magiay]'";
    $query_sua = mysqli_query($conn, $sql_sua);
?>
<link rel="stylesheet" href="./css/them.css">
<body>
    <div class="container">
      <div class="container-fluid mt-3 vien" >
        
        <fieldset>
            <legend><b>Sửa Sản Phẩm</b></legend> 
            <?php
                while($row = mysqli_fetch_array($query_sua)){

                
            ?>
            <form action="./modules/qlsp/xuly.php?magiay=<?php echo $_GET['magiay']?>" method="post" enctype="multipart/form-data">
                <!-- Vertical -->
                <div class="form-group">
                    <div class="text">
                    <label for="myEmail"><b>Tên Sản Phẩm</b> </label>
                        <input type="text" id = "myEmail" value="<?php echo $row['Tengiay']?>" name="tensp" class="form-control size">
                        <!-- <label for="myPassword"><b>Mã Loại Sản Phẩm</b></label>
                        <input type="text" id="myPassword"  name="loai" class="form-control size"> -->
                        <div>
                            <table>
                                <tr>
                                    <td><b>Loại Sản Phẩm </b></td> <br>
                                    <td>
                                        <select name="loai" id="">
                                            <?php
                                            $sql_loai = "SELECT * FROM loaigiay ORDER BY Maloai DESC";
                                            $query_loai = mysqli_query($conn,$sql_loai);
                                            while($row_loai = mysqli_fetch_array($query_loai)){
                                        ?> 
                                        <option value="<?php echo $row_loai['Maloai']?>"><?php echo $row_loai['Tenloai'] ?></option>
                                        <?php
                                            }
                                        ?> 

                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div> <br>
                        <label for="myPassword"><b>Hình Ảnh</b></label>
                        <input type="file" id="myPassword" value="<?php echo $row['Hinh']?>" name="hinh" class="form-control size">
                        <img src="modules/qlsp/uploads/<?php echo $row['Hinh'] ?>" width="100px">
                        <div>
                            <table>
                                <tr>
                                    <td><b>Giới Tính </b></td> <br>
                                    <td>
                                        <select name="gioitinh" id="">
                                            <?php
                                            $sql_gt = "SELECT * FROM gioitinh ORDER BY Magt DESC";
                                            $query_gt = mysqli_query($conn,$sql_gt);
                                            while($row_gt = mysqli_fetch_array($query_gt)){
                                        ?> 
                                        <option value="<?php echo $row_gt['Magt'] ?>"><?php echo $row_gt['Tengt'] ?></option>
                                        <?php
                                            }
                                        ?> 

                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div> <br>
                        <!-- <label for="myPassword"><b>Mã Giới tính</b></label> -->
                        <!-- <input type="text" id="myPassword" value="<?php //echo $row['Magt']?>" name="gioitinh" class="form-control size"> -->
                        <div>
                            <table>
                                <tr>
                                    <td><b>Size</b></td> <br>
                                    <td>
                                        <select name="size" id="">
                                            <?php
                                            $sql_size = "SELECT * FROM size ORDER BY STT_size DESC";
                                            $query_size = mysqli_query($conn,$sql_size);
                                            while($row_gt = mysqli_fetch_array($query_size)){
                                        ?> 
                                        <option value="<?php echo $row_gt['STT_size'] ?>"><?php echo $row_gt['Size'] ?></option>
                                        <?php
                                            }
                                        ?> 

                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div> <br>
                        <label for="myPassword"><b>Số Lượng</b></label>
                        <input type="text" id="myPassword" value="<?php echo $row['Soluong']?>" name="soluong" class="form-control size">
                        <label for="myPassword"><b>Giá</b></label>
                        <input type="text" id="myPassword" value="<?php echo $row['Gia']?>" name="gia" class="form-control size">
                    </div>
                    <br>
                <div class="buton">
                        <button type="submit" name="suasp" class="btn btn-primary">Submit</button>
                        <button type="reset" name="huy" class="btn btn-primary">Cancal</button>                
                </div>
                </div>
            </form>
            <?php
                }
            ?>
        </fieldset> <br>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>    
    </div>

   </body> <br>
</html>