<?php
    $sql_lke_dh = "SELECT * FROM ct_hoadonban cthdb, giay g WHERE cthdb.Mahd = '$_GET[mahd]' AND g.Magiay = cthdb.Magiay";
    $query_lke = mysqli_query($conn, $sql_lke_dh);
?>
<div>
        <table class="table table-bordered">
            <h3 style="color: cornflowerblue; text-align:center;"> <b>Chi Tiết Hóa Đơn</b></h3>
            <thead>
                <tr>
                    <th>Mã Hóa Đơn</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Giá</th>
                    <th>Tổng Tiền</th>
                </tr>
            </thead>
                <?php
                    $i=0;
                    $tongtien = 0;
                    while( $row = mysqli_fetch_array($query_lke)){ 
                        $i++;
                        $thanhtien = $row['Gia'] * $row['Soluongban'];
                        $tongtien += $thanhtien;
                ?>            
            <tbody>
                <tr>
                    <td><?php echo $row['Mahd'] ?></td>
                    <td><?php echo $row['Tengiay'] ?></td>
                    <td><?php echo $row['Soluongban']?></td>
                    <td><?php echo number_format( $row['Gia']). ',' . 'VND' ?></td>
                    <td><?php echo number_format($thanhtien). ',' .'VND'  ?></td>
                </tr>
                <tr>

            </tbody>
                <?php
                    }
                ?> 
                    <td colspan = "6">
                        <p> Tổng tiên: <?php echo number_format($tongtien). ',' .'VND'?></p>
                    </td>
                </tr>               
        </table>
</div>