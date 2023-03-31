<div class="body">
    <?php
    if(isset($_GET['action'])&& $_GET['query']){
        $tam = $_GET['action'];
        $query = $_GET['query'];
    }else{
        $tam = '';
        $query = '';
    }if($tam == 'qlloaisp' && $query=='them'){
        include("modules/qlloaisp/them.php");
        include("modules/qlloaisp/lietke.php");
    }elseif($tam == 'qlloaisp' && $query=='sua'){
        include("modules/qlloaisp/sua.php");
    }elseif($tam == 'qlsp' && $query=='them'){
        include("modules/qlsp/them.php");
        include("modules/qlsp/lietke.php");
    }elseif($tam == 'qlsp' && $query=='sua'){
        include("modules/qlsp/sua.php");
    }elseif($tam == 'giasp' && $query == 'them'){
        include("modules/giasp/them.php");
    }
    elseif($tam == 'qldonhang' && $query == 'lietke'){
        include("modules/qldonhang/lietke.php");
    }
    elseif($tam == 'donhang' && $query == 'xem'){
        include("modules/qldonhang/xemdonhang.php");
    }
    else{
        include("login.php");
    }

    ?>
</div>