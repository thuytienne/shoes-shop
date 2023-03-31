
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thúy Tiên Shoes</title>
    <link rel="shortcut icon" href="./images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
      .body{
        padding-top: 12px;
      }
      h1{
        padding-top: 12px;
        text-align: center;
      }
      .footer{
        display: grid;
        border: 1px solid #ccc;
        background-color: #f8f9fa;
        border-radius: 5px;
        text-align: center;
        padding-top: 10px;
      }
      .sp{
        text-align: center;
      }
    </style>
</head>
<?php
  // if(!isset($_SESSION['dangnhap'])){
  //   header('Location: pages/main/Dangnhap.php');
  // }
?>
<body>
    <div class="container">
      <?php
      include("admincp/config/config.php");
      include("pages/header.php");
      include("pages/main.php");
      
      ?>

    </div>
    <?php
      include("pages/footer.php");
    ?>
</body>

</html>