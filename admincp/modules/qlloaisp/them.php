<link rel="stylesheet" href="./css/them.css">
<body>
    <div class="container">
      <div class="container-fluid mt-3 vien" >
        
        <fieldset>
            <legend><b>Thêm Loại Sản Phẩm</b></legend> 
            <form action="./modules/qlloaisp/xuly.php" method="post">
                <!-- Vertical -->
                <div class="form-group">
                    <div class="text">
                    <label for="myEmail"><b>Mã Loại</b> </label>
                        <input type="text" id = "myEmail" name="maloai" class="form-control size">
                        <label for="myPassword"><b>Tên Loại</b></label>
                        <input type="text" id="myPassword" name="tenloai" class="form-control size">
                    </div>
                    <!-- <br> -->
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
                <div class="buton">
                        <button type="submit" name="themloai" class="btn btn-primary">Submit</button>
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