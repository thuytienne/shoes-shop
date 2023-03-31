<?php
session_start();
include('../../admincp/config/config.php');
$tenkh = $_POST['hoten'];
$diachi = $_POST['diachi'];
$sdt = $_POST['sdt'];
$tendangnhap = $_POST['tendangnhap'];
$matkhau = md5($_POST['matkhau']);
if (isset($_POST['dangki'])) {
  $sql_sub = "INSERT INTO khachhang (Tenkh, Diachi, SDT, Tendangnhap, Matkhau) VALUES ('" . $tenkh . "', '" . $diachi . "', 
                              '" . $sdt . "', '".$tendangnhap."', '" . $matkhau . "')";
  mysqli_query($conn, $sql_sub);
  if($sql_sub){
    $_SESSION['dangki'] = $tendangnhap;
    $_SESSION['Makh'] = mysqli_insert_id($conn);
    echo '<script>alert("Đăng Ký Thành Công")</script>';
    // header('location: Dangnhap.php');
    header('Refresh: 1;url=Dangnhap.php');

  }

}
?>