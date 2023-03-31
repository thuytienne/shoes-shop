<?php
    $sql_lke = "SELECT * FROM loaigiay lg, gioitinh gt WHERE lg.Magt = gt.Magt ORDER BY maloai DESC";
    $query_lke = mysqli_query($conn, $sql_lke);
?>
<div>
        <table class="table table-bordered">
            <h3 style="color: cornflowerblue; text-align:center;"> <b>Danh sách loại sản phẩm</b></h3>
            <thead>
                <tr>
                    <th>Mã Loại</th>
                    <th>Tên Loại</th>
                    <th>Giới Tính</th>
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
                    <td><?php echo $row['Maloai'] ?></td>
                    <td><?php echo $row['Tenloai'] ?></td>
                    <td><?php echo $row['Tengt'] ?></td>
                    <td>
                        <a href="?action=qlloaisp&query=sua&maloai=<?php echo $row['Maloai']?>">Sửa</a> | <a href="modules/qlloaisp/xuly.php?maloai=<?php echo $row['Maloai']?>">Xóa</a>
                    </td>
                </tr>
            </tbody>
                <?php
                    }
                ?>            
        </table>
</div>