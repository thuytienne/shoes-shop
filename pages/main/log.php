<?php
    session_start();
    include('../../admincp/config/config.php');

    if (isset($_POST['dangnhap'])) {
        $tendangnhap = $_POST['tendangnhap'];
        $matkhau = md5($_POST['matkhau']);
        $sql = "SELECT * FROM khachhang WHERE Tendangnhap = '".$tendangnhap."' AND Matkhau = '".$matkhau."' ";
        $query = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($query);
        if ($count > 0) {
            $row_data = mysqli_fetch_array($query);
            // $_SESSION['dangnhap'] = $row_data['Tendangnhap'];
            $_SESSION['dangki'] = $row_data['Makh'];
            $_SESSION['idkh'] = $row_data['Makh'];
            header('location: ../../index.php');
        } else {
            // header('location: Dangnhap.php');
            echo '<script>alert("Tên Đăng Nhập Hoặc Mật Khẩu Không Đúng");</script>';
            header('Refresh: 1;url=Dangnhap.php');
            
        }
        // $result = $conn -> query($sql);
        // if($result -> num_rows >0){
        //     $row = $result -> fetch_assoc();
        //     $cookie_name = "tendangnhap";
        //     $cookie_value = $row['tendangnhap'];
        //     setcookie($cookie_name, $cookie_value, time() + (86400/24), "/");
        //     // setcookie("Tenkh", $row['Tenkh'], time() + (86400 / 24), "/");

        //     header('Location: ../../index.php');

        // }else{
        //     echo '<script>alert("Tên Đăng Nhập Hoặc Mật Khẩu Không Đúng");</script>';
        //     // echo "Error: " .$sql. "<br>" .$conn->error;
        //     header('Refresh: 1;url=Dangnhap.php');
        //     // header('location: Dangnhap.php');
        // }

    }


?>