<?php
    $sql_lke = "SELECT * FROM giay g, loaigiay lg, gioitinh gt, size
                WHERE g.Maloai = lg.Maloai
                AND g.Magt = gt.Magt
                AND g.STT_size = size.STT_size
                ORDER BY Magiay DESC";
    $query_lke = mysqli_query($conn, $sql_lke);
?>
<div>
        <table class="table table-bordered">
            <h3 style="color: cornflowerblue; text-align:center;"> <b>Danh sách sản phẩm</b></h3>
            <thead>
                <tr>
                    <th> Mã Sản Phẩm</th>
                    <th> Tên Sản Phẩm</th>
                    <th>Tên Loại</th>
                    <th>Hình</th>
                    <th>Giới Tính</th>
                    <th>Size</th>
                    <th>Số Lượng</th>
                    <th>Giá</th>
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
                    <td><?php echo $row['Magiay'] ?></td>
                    <td><?php echo $row['Tengiay'] ?></td>
                    <td><?php echo $row['Tenloai'] ?></td>
                    <td> <img src="modules/qlsp/uploads/<?php echo $row['Hinh'] ?>" width="100px"> </td>
                    <td><?php echo $row['Tengt'] ?></td>
                    <td><?php echo $row['Size'] ?></td>
                    <td><?php echo $row['Soluong'] ?></td>
                    <td><?php echo number_format($row['Gia']). ' '. 'VNĐ'?></td>
                    <td>
                        <a style="text-decoration: none;" href="?action=qlsp&query=sua&magiay=<?php echo $row['Magiay']?>">Sửa</a> | <a style="text-decoration: none;" href="modules/qlsp/xuly.php?magiay=<?php echo $row['Magiay']?>">Xóa</a>
                    </td>
                </tr>
            </tbody>
                <?php
                    }
                ?>            
        </table>
</div>