<h1>CHI TIẾT SẢN PHẨM</h1>
<?php
   $sql_chitiet = "SELECT * FROM loaigiay, giay, size where loaigiay.Maloai = giay.Maloai AND giay.STT_size = size.STT_size AND  giay.Magiay = '$_GET[id]' LIMIT 1";
   // $sql_chitiet = "SELECT * FROM giay where Magiay = '$_GET[id]' LIMIT 1";
   $query_chitiet = mysqli_query($conn, $sql_chitiet);
   while($row_chitiet = mysqli_fetch_array($query_chitiet)){


?>
<style>
   .warrper_chitiet{
      border: 1px solid #fff;
      height: 500px;
      margin: 0 auto;
   }
   .hinhanhsp{
      float: left;
      width: 50%;
      height: 400px
   }
   .chitietsp{
      float: right;
      width: 50%;
   }
   .btngiohang{
      border: none;
      background-color: #0dcaf0;
      font-weight: bold;
      padding: 17px;
   }
</style>
<div class= "warrper_chitiet">
   <div class="hinhanhsp">
      <img src="admincp/modules/qlsp/uploads/<?php echo $row_chitiet['Hinh']?>" width="50%"/>
   </div>
   <form method="post" action="pages/main/themgiohang.php?magiay=<?php echo $row_chitiet['Magiay']?>">
      <div class="chitietsp">
            <h3><?php echo $row_chitiet['Tengiay'] ?></h3>
            <p> Mã giày:  <?php echo $row_chitiet['Magiay']?></p>
            <p> Loại giày:  <?php echo $row_chitiet['Tenloai']?></p>
            <p> Số Lượng:  <?php echo $row_chitiet['Soluong']?></p>
            <h5> Size:  <?php echo $row_chitiet['Size']?><h5>
            <h4> Giá:  <?php echo number_format($row_chitiet['Gia']).' '.'VND'?> </h4>   
            <button type = "submit" name="themgiohang" class = "btngiohang">Thêm Vào Giỏ Hàng </button>
            <!-- <input type="submit" class="btngiohang" value="Thêm Giỏ Hàng"> -->
      </div>
   </form>

</div>   
<?php
   }
?>