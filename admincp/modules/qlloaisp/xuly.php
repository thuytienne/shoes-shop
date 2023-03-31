<?php 
include('../../config/config.php');
    $maloai = $_POST['maloai'];
    $tenloai = $_POST['tenloai'];
    $gt = $_POST['gioitinh'];
    if(isset($_POST['themloai'])){
        $sql_them = "INSERT INTO loaigiay(maloai, tenloai, magt) VALUES('".$maloai."', '".$tenloai."', '".$gt."')";
        mysqli_query($conn, $sql_them);
        header('location:../../index.php?action=qlloaisp&query=them');
    }elseif(isset($_POST['sualoai'])){
        $sql_sua = "UPDATE loaigiay SET Maloai ='".$maloai."', Tenloai='".$tenloai."' WHERE Maloai = '$_GET[maloai]'";
        mysqli_query($conn, $sql_sua);
        header('location:../../index.php?action=qlloaisp&query=them');
    }else{
        $mloai = $_GET['maloai'];
        $sql_xoa = "DELETE FROM loaigiay WHERE Maloai = '".$mloai."'";
        mysqli_query($conn, $sql_xoa);
        header('location:../../index.php?action=qlloaisp&query=them');
    }

?>