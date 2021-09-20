<?php include "base.php";

if (!isset($_SESSION['login'])) {
  to("index.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>後台管理系統</title>
  <link href="./css/backend.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <script src="./scripts/jquery-1.9.1.min.js"></script>
  <script src="./scripts/main.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>

<body>
  <!-- modal點擊事件 -->
  <div id="cover" style="display:none; ">
    <div id="coverr">
      <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')"><button type="button" class="btn-close"></button></a>
      <div id="cvr" style="position:absolute; width:100%; height:100%; margin:auto; z-index:9898;"></div>
    </div>
  </div>
  <header class="fixed-top d-flex">
    <div class="box d-flex m-auto position-relative">
      <div class="d-inline-block fs-3 fw-bold m-auto">後台管理區</div>
      <a href="api/logout.php" class="btn btn-outline-warning" style="line-height: 28px;">登出</a>
      <!-- <button onclick="location.replace(&#39;api/logout.php&#39;)" style="height:40px;" class="btn btn-outline-warning fw-bold position-absolute">管理登出</button> -->
    </div>
  </header>
  <div id="main">
    <div class="d-flex p-3">
      <div>
        <!--主選單放此-->
        <h5 class="text-center text-success">後台管理選單</h5>
        <div class="btn-group-vertical">
          <a href="./backend.php?do=bg" class="btn btn-outline-success text-decoration-none p-3"><?= $ts['bg']; ?></a>
          <a href="?do=photo" class="btn btn-outline-success text-decoration-none p-3"><?= $ts['photo']; ?></a>
          <a href="?do=typewriter" class="btn btn-outline-success text-decoration-none p-3"><?= $ts['typewriter']; ?></a>
          <a href="?do=intro" class="btn btn-outline-success text-decoration-none p-3"><?= $ts['intro']; ?></a>
          <a href="?do=skills" class="btn btn-outline-success text-decoration-none p-3"><?= $ts['skills']; ?></a>
          <a href="?do=experience" class="btn btn-outline-success text-decoration-none p-3"><?= $ts['experience']; ?></a>
          <a href="?do=portfolio" class="btn btn-outline-success text-decoration-none p-3"><?= $ts['portfolio']; ?></a>
          <a href="?do=icon" class="btn btn-outline-success text-decoration-none p-3"><?= $ts['icon']; ?></a>
          <a href="?do=admin" class="btn btn-outline-success text-decoration-none p-3"><?= $ts['admin']; ?></a>
          <a href="index.php" class="btn btn-outline-success text-decoration-none p-3">返回前台</a>
        </div>
        <?php 
          if ($_SESSION['login'] != "roger"){
            echo "<p class='text-danger text-center mt-5'>目前為訪客模式</p>";
            echo "<p class='text-danger text-center'>無法編輯</p>";
          }
        ?>
      </div>
      <div style="height:540px; width:86.5%; margin:2px 0px 0px 0px; position:relative; left:20px;">
        <!--正中央-->
        <?php
        $do = (isset($_GET['do'])) ? $_GET['do'] : 'bg';
        $file = "backend/" . $do . ".php";
        // 先判斷檔案是否存在
        if (file_exists($file)) {
          include $file;
        } else {
          include "backend/bg.php";
        }
        ?>
      </div>
    </div>

</body>

</html>