<?php
    session_start();    
    include('../../admincp/config/config.php');

    //them so luong
    if(isset($_GET['cong'])){
        $id = $_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $sp[] = array('Tengiay' => $cart_item['Tengiay'], 'id' =>$cart_item['id'], 'Gia' => $cart_item['Gia'], 'soluong' =>$cart_item['soluong'], 'hinh' => $cart_item['hinh']);
                $_SESSION['cart'] = $sp;
            }else{
                
                if($cart_item['soluong']<10){
                    $tangsoluong = $cart_item['soluong']+1;
                $sp[] = array('Tengiay' => $cart_item['Tengiay'], 'id' =>$cart_item['id'], 'Gia' => $cart_item['Gia'], 'soluong' =>$tangsoluong, 'hinh' => $cart_item['hinh']);

                }else{
                $sp[] = array('Tengiay' => $cart_item['Tengiay'], 'id' =>$cart_item['id'], 'Gia' => $cart_item['Gia'], 'soluong' =>$cart_item['soluong'], 'hinh' => $cart_item['hinh']);

                }
                $_SESSION['cart'] = $sp;

            }
            
            
        }
        header('Location: giohang.php');
    }
    //tru so luong

    if(isset($_GET['tru'])){
        $id = $_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $sp[] = array('Tengiay' => $cart_item['Tengiay'], 'id' =>$cart_item['id'], 'Gia' => $cart_item['Gia'], 'soluong' =>$cart_item['soluong'], 'hinh' => $cart_item['hinh']);
                $_SESSION['cart'] = $sp;
            }else{
                
                if($cart_item['soluong']>1){
                    $trusoluong = $cart_item['soluong']-1;
                $sp[] = array('Tengiay' => $cart_item['Tengiay'], 'id' =>$cart_item['id'], 'Gia' => $cart_item['Gia'], 'soluong' =>$trusoluong, 'hinh' => $cart_item['hinh']);

                }else{
                $sp[] = array('Tengiay' => $cart_item['Tengiay'], 'id' =>$cart_item['id'], 'Gia' => $cart_item['Gia'], 'soluong' =>$cart_item['soluong'], 'hinh' => $cart_item['hinh']);

                }
                $_SESSION['cart'] = $sp;

            }
            
            
        }
        header('Location: giohang.php');
    }

    //xoa sp
    if(isset($_SESSION['cart'])&& isset($_GET['xoa']) ){
        $id = $_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $sp[] = array('Tengiay' => $cart_item['Tengiay'], 'id' =>$cart_item['id'], 'Gia' => $cart_item['Gia'], 'soluong' =>$cart_item['soluong'], 'hinh' => $cart_item['hinh']);

            }
            $_SESSION['cart'] = $sp;
            header('Location: giohang.php');
        }
    }
    //xoa tát ca
    if(isset($_GET['xoatatca']) && $_GET['xoatatca']==1){
        unset($_SESSION['cart']);
        header('Location: giohang.php');
    }

    //themsp vao gio hang
    if(isset($_POST['themgiohang'])){
        // session_destroy();
        $id = $_GET['magiay'];
        $soluong=1;
        $sql = "SELECT * FROM giay WHERE Magiay = '".$id."'LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
        if($row){
            $new_sp = array(array('Tengiay' => $row['Tengiay'], 'id' => $id, 'Gia' => $row['Gia'], 'soluong' =>$soluong, 'hinh' => $row['Hinh']));
            if(isset($_SESSION['cart'])){
                $found = false;
                foreach($_SESSION['cart'] as $cart_item){
                    if($cart_item['id']==$id){
                         $sp[] = array('Tengiay' => $cart_item['Tengiay'], 'id' =>$cart_item['id'], 'Gia' => $cart_item['Gia'], 'soluong' =>$soluong+1, 'hinh' => $cart_item['hinh']);
                         $found = true;
                    }else{
                        $sp[] = array('Tengiay' => $cart_item['Tengiay'], 'id' => $cart_item['id'], 'Gia' => $cart_item['Gia'], 'soluong' =>$cart_item['soluong'], 'hinh' => $cart_item['hinh']);
                    }
                }
                if($found == false){
                    $_SESSION['cart'] = array_merge($sp, $new_sp);
                }
                else{
                    $_SESSION['cart'] = $sp;
                }
            }
            else{
                $_SESSION['cart'] = $new_sp;
            }
           
        }
         header('Location: giohang.php');
    }
    
?>