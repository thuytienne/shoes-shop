<?php 
include('../../config/config.php');
    $tensp = $_POST['tensp'];
    $maloai = $_POST['loai'];
    //xu ly hinh anh
    $hinhanh = $_FILES['hinh']['name'];
    $hinhanh_tmp = $_FILES['hinh']['tmp_name'];    
    $hinhanh = time(). '_'.$hinhanh;
    //
    $gt = $_POST['gioitinh'];
    $size = $_POST['size'];
$sl = $_POST['soluong'];
    $gia = $_POST['gia'];
       
    if(isset($_POST['themsp'])){
        $sql_them = "INSERT INTO giay(Tengiay, maloai, hinh, magt, STT_size, Soluong, Gia) VALUES('".$tensp."', '".$maloai."', '".$hinhanh."', '".$gt."', '".$size."', '".$sl."', '".$gia."')";
        mysqli_query($conn, $sql_them);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh); 
        header('location:../../index.php?action=qlsp&query=them');
    }elseif(isset($_POST['suasp'])){
        if($hinhanh != ' '){
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh); 
            $sql = "SELECT * FROM giay WHERE Magiay = '$_GET[magiay]' LIMIT 1";  
            $query = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($query)){
                unlink('uploads/'.$row['Hinh']);
            }                          
            $sql_sua = "UPDATE giay SET Tengiay ='".$tensp."', Maloai='".$maloai."', Hinh = '".$hinhanh."', Magt = '".$gt."', STT_size = '".$size."', Soluong = '".$sl."', Gia = '".$gia."' WHERE Magiay = '$_GET[magiay]'";

        
        }else{
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh); 
            $sql_sua = "UPDATE giay SET Tengiay ='".$tensp."', Maloai='".$maloai."',  Magt = '".$gt."', STT_size = '".$size."',  Soluong = '".$sl."', Gia = '".$gia."' WHERE Magiay = '$_GET[magiay]'";
        }
        
        mysqli_query($conn, $sql_sua);
        header('location:../../index.php?action=qlsp&query=them');
    }else{
        $magiay = $_GET['magiay'];
        $sql = "SELECT * FROM giay WHERE Magiay = '$magiay'";
        $query = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['Hinh']);
        }
        $sql_xoa = "DELETE FROM giay WHERE Magiay = '".$magiay."'";
        mysqli_query($conn, $sql_xoa);
        header('location:../../index.php?action=qlsp&query=them');
    }

?>