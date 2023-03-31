<?php
    $sql_dh = "SELECT * FROM hoadonban hdb, khachhang kh WHERE hdb.Makh = kh.Makh ORDER BY Ngayban DESC";
    $query_lke = mysqli_query($conn, $sql_dh);
?>
<div>
        <table class="table table-bordered">
            <h3 style="color: cornflowerblue; text-align:center;"> <b>Danh sách Hóa Đơn</b></h3>
            <thead>
                <tr>
                    <th>Mã Hóa Đơn</th>
                    <th>Tên Khách Hàng</th>
                    <th>Số Điện Thoại</th>
                    <th>Địa Chỉ</th>
                    <!-- <th>Trị Giá</th> -->
                    <th>Ngày Bán</th>
                    <th>Quản Lý</th>
                </tr>
            </thead>
                <?php
                    $i=0;
                    while( $row = mysqli_fetch_array($query_lke)){ 
                        $i++;
                ?>            
            <tbody>
                
                <tr>
                    <td><?php echo $row['Mahd'] ?></td>
                    <td><?php echo $row['Tenkh'] ?></td>
                    <td><?php echo $row['SDT'] ?></td>
                    <td><?php echo $row['Diachi'] ?></td>
                    <!-- <td><?php //echo $row['Trigia'] ?></td> -->
                    <td><?php echo $row['Ngayban'] ?></td>
                    <td>
                        <a href="index.php?action=donhang&&query=xem&&mahd=<?php echo $row['Mahd']?>">Xem đơn hàng</a>
                    </td>
                </tr>
            </tbody>
                <?php
                    }
                ?>            
        </table>
</div>