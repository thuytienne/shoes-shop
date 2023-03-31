<?php
    $sql_sua = "SELECT * FROM loaigiay WHERE Maloai='$_GET[maloai]'";
    $query_sua = mysqli_query($conn, $sql_sua);
?>
<link rel="stylesheet" href="./css/them.css">
<body>
    <div class="container">
      <div class="container-fluid mt-3 vien" >
        
        <fieldset>
            <legend><b>Sửa Loại Sản Phẩm</b></legend> 
            <form action="./modules/qlloaisp/xuly.php?maloai=<?php echo $_GET['maloai']?>" method="post" >
                <?php
                    while($dong = mysqli_fetch_array($query_sua)){

                    
                ?>
                <div class="form-group">
                    <div class="text">
                    <label for="myEmail"><b>Mã Loại</b> </label>
                        <input type="text" id="myEmail" value="<?php echo $dong['Maloai']?>" name="maloai" class="form-control size">
                        <label for="myPassword"><b>Tên Loại</b></label>
                        <input type="text" id="myPassword" value="<?php echo $dong['Tenloai']?>" name="tenloai" class="form-control size">
                    </div>
                    <br>
                <div class="buton">
                        <button type="submit"  name="sualoai" class="btn btn-primary">Submit</button>
                        <button type="reset" name="huy" class="btn btn-primary">Cancal</button>                
                </div>
                </div>
                <?php
                    }
                ?>
            </form>
        </fieldset> <br>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>    
    </div>