<?php
    session_start();
    include("../../admincp/config/config.php");
    // if (isset($_SESSION['cart'])) {
    // //   $i = 0;
    //   $tongtien = 0;
    //   foreach ($_SESSION['cart'] as $cart_item) {
    //     $thanhtien = $cart_item['soluong'] * $cart_item['Gia'];
    //     $tongtien += $thanhtien;
    //     // $i++;

    //   }
    //   $id_kh = $_SESSION['Makh'];
    //   $mahd = rand(0,9999);
    //   $ngayban = date('d/m/Y');
    //   // $thanhtien = $value['soluong']*$value['Gia'];
    //   // $trigia += $thanhtien;
    //   $insert_csdl = "INSERT INTO hoadonban(Mahd, Makh, Trigia, Ngayban) VALUES('".$mahd."', '".$id_kh."', '".$tongtien."' '".$ngayban."') ";
    //   $query = mysqli_query($conn, $insert_csdl);
    // }
       $id_kh = $_SESSION['idkh'];
    foreach($_SESSION['cart'] as $key => $value){
      $i=0;
      $trigia = 0;
    $mahd = rand(0,9990);
    $ngayban = Date("Y/m/d H:i:s");
    $thanhtien = $value['soluong'] * $value['Gia'];
    $trigia = $trigia + $thanhtien;
    $i++;  
    $insert_csdl = "INSERT INTO hoadonban(Mahd, Makh, Trigia, Ngayban) VALUES('".$mahd."','".$_SESSION['idkh']."', '".$trigia."', '".$ngayban."') ";
    $query_hd = mysqli_query($conn, $insert_csdl);     
    
    }


    if($insert_csdl){
        // $_SESSION['Mahd'] = $row_data['Mahd'];
        // $_SESSION['Gia'] = $row_data['Gia'];
        foreach($_SESSION['cart'] as $key => $value ){

            $id_sp = $value['id'];
            $soluong = $value['soluong'];
            // $gia = $value['Gia'];
            $insert_cthd = "INSERT INTO ct_hoadonban(Mahd, Magiay, Soluongban ) VALUES('".$mahd."', '".$id_sp."', '".$soluong."')";
            mysqli_query($conn, $insert_cthd);

        }
    }
    unset($_SESSION['cart']);
    echo '<script>alert("Đặt Hàng Thành Công")</script>';
    // header('location: ../../index.php');
    header('Refresh: 1;url=../../index.php');
    
?>