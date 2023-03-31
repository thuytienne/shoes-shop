<div class="body">
    <?php
    if(isset($_GET['quanly'])){
        $tam = $_GET['quanly'];
    }else{
        $tam = '';
    }if($tam == 'trangchu'){
        include("main/trangchu.php");
    }elseif($tam == 'dangnhap'){
        include("main/Dangnhap.php");
    }elseif($tam == 'dangky'){
        include("main/dangky.php");
    }
    // elseif($tam == 'giohang'){
    //     include("main/giohang.php");
    // }
    elseif($tam == 'qloai'){
        include("main/danhmuc.php");
    }elseif($tam == 'giay'){
        include("main/sanpham.php");
    }elseif($tam == 'timkiem'){
        include("main/timkiem.php");
    }
     else{
        include("main/trangchu.php");
    }
   
    
    ?>
</div>