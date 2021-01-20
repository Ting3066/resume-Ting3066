<?php
include_once "base.php";
if(isset($_SESSION['login'])){


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/bc80d402a1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/BKstyle.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="settingBox col-12">
        <div id="menuBar">
          <a href="index.php"><i class="fas fa-arrow-circle-left"></i>回前台</a>
          <a href="?do=basic">基本資料管理</a>
          <a href="?do=image">照片管理</a>
          <a href="?do=skill">技能管理</a>
          <a href="?do=education">學歷管理</a>
          <a href="?do=experience">經歷管理</a>
          <a href="?do=autobiography">自傳管理</a>
          <a href="?do=require">求職條件管理</a>
          <a href="?do=portfolio">作品管理</a>
          <a href="api/logout.php">管理登出</a>
        </div>
        <div id="settingArea">
          <?php
            $do=(isset($_GET['do']))?$_GET['do']:'basic';
            $file="./backend/".$do.".php";
            if(file_exists($file)){
              include $file;
            }else{
      
              include "./backend/basic.php";
            }
          ?>
        </div>
      </div>
    </div>
  
  </div>
</body>
</html>

<?php
}else{

  echo "非法入侵";
}
?>