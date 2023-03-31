<link rel="stylesheet" href="./css/them.css">
<body>
    <div class="container">
      <div class="container-fluid mt-3 vien" >
        
        <fieldset>
            <legend><b>Thêm Sản Phẩm</b></legend> 
            <form action="./modules/qlsp/xuly.php" method="post" enctype="multipart/form-data">
                <!-- Vertical -->
                <div class="form-group">
                    <div class="text">
                    <label for="myEmail"><b>Tên Sản Phẩm</b> </label>
                        <input type="text" id = "myEmail" name="tensp" class="form-control size">
                        <!-- <div>
                            <label for="myPassword"><b>Loại Sản Phẩm</b></label>

                            <input type="text" id="myPassword" name="loai" class="form-control size">                            
                               
                        </div> -->
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
                                        <option value="<?php echo $row_loai['Maloai'] ?>"><?php echo $row_loai['Tenloai'] ?></option>
                                        <?php
                                            }
                                        ?> 

                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div> <br>

                        <label for="myPassword"><b>Hình Ảnh</b></label>
                        <input type="file" id="myPassword" name="hinh" class="form-control size">
                        <!-- <label for="myPassword"><b>Mã Giới tính</b></label> -->
                        <!-- <input type="text" id="myPassword" name="gioitinh" class="form-control size"> -->
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
                        <!-- <label for="myPassword"><b>Size</b></label>
                        <input type="text" id="myPassword" name="size" class="form-control size"> -->

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
                        <input type="text" id="myPassword" name="soluong" class="form-control size">
                        <label for="myPassword"><b>Giá</b></label>
                        <input type="text" id="myPassword" name="gia" class="form-control size">
                    </div>
                    <br>
                <div class="buton">
                        <button type="submit" name="themsp" class="btn btn-primary">Thêm</button>
                        <button type="reset" name="huy" class="btn btn-primary">Cancal</button>                
                </div>
                </div>
            </form>
        </fieldset> <br>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>    
    </div>

   </body> <br>
</html>