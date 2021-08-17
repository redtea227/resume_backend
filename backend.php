<?php include "base.php";
if (!isset($_SESSION['admin'])) {
  to("index.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=admin&redo=title -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>後台管理系統</title>
  <link href="./css/css.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <script src="./js/jquery-1.9.1.min.js"></script>
  <script src="./js/js.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

  <style>
    .menu-style {
      color: #000;
      font-size: 13px;
      text-decoration: none;
    }

    a {
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div id="cover" style="display:none; ">
    <div id="coverr">
      <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
      <div id="cvr" style="position:absolute; width:100%; height:100%; margin:auto; z-index:9898;"></div>
    </div>
  </div>

  <div id="main">
    <div id="ms" class="d-flex">
      <div id="lf" style="float:left;">
        <div id="menuput" class="dbor">
          <!--主選單放此-->
          <h5 class="text-center">後台管理選單</h5>
          <div class="btn-group-vertical">
            <a href="./backend.php?do=bg" class="btn btn-secondary text-decoration-none">背景圖片管理</a>
            <a href="?do=photo" class="btn btn-secondary text-decoration-none">大頭照管理</a>
            <a href="?do=typewriter" class="btn btn-secondary text-decoration-none">打字機管理</a>
            <a href="?do=intro" class="btn btn-secondary text-decoration-none">簡介管理</a>
            <a href="?do=skills" class="btn btn-secondary text-decoration-none">技能管理</a>
            <a href="?do=experience" class="btn btn-secondary text-decoration-none">經歷管理</a>
            <a href="?do=portfolio" class="btn btn-secondary text-decoration-none">作品集管理</a>
            <a href="?do=total" class="btn btn-secondary text-decoration-none">進站總人數管理</a>
            <a href="?do=icon" class="btn btn-secondary text-decoration-none">Icon</a>
            <a href="?do=admin" class="btn btn-secondary text-decoration-none">管理者帳號管理</a>
            <a href="index.php" class="btn btn-outline-info text-decoration-none">返回前台</a>
          </div>
        </div>
        <div class="dbor" style="margin:3px; width:95%; height:11%; line-height:45px;">
          <span class="t">進站總人數 :<?= $Total->find(1)['total']; ?></span>
        </div>
      </div>
      <div class="di" style="height:540px; width:86.5%; margin:2px 0px 0px 0px; position:relative; left:20px;">
        <!--正中央-->
        <table width="100%">
          <tbody>
            <tr>
              <td style="width:90%;font-weight:800;" class="text-center border-1">後台管理區</td>
              <td><button onclick="location.replace(&#39;api/logout.php&#39;)" style="width:99%; margin-right:2px; height:50px;" class="btn btn-outline-warning fw-bold">管理登出</button></td>
            </tr>
          </tbody>
        </table>
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