<?php include "base.php"; 
if (!isset($_SESSION['admin'])){
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
      <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
    </div>
  </div>

  <div id="main">
    <a title="<?= $Bg->find(['sh' => 1])['text']; ?>" href="index.php" alt="">
      <div class="ti" style="background:url(&#39;img/<?= $Bg->find(['sh' => 1])['img']; ?>&#39;); background-size:cover;">
      </div>
      <!--標題-->
    </a>
    <div id="ms">
      <div id="lf" style="float:left;">
        <div id="menuput" class="dbor">
          <!--主選單放此-->
          <span class="t botli">後台管理選單</span>
          <a class="menu-style" href="./backend.php?do=bg">
            <div class="mainmu">背景圖片管理 </div>
          </a>
          <a class="menu-style" href="?do=photo">
            <div class="mainmu">大頭照管理 </div>
          </a>
          <a class="menu-style" href="?do=typewriter">
            <div class="mainmu">打字機管理 </div>
          </a>
          <a class="menu-style" href="?do=intro">
            <div class="mainmu">簡介管理 </div>
          </a>
          <a class="menu-style" href="?do=skills">
            <div class="mainmu">技能管理 </div>
          </a>
          <a class="menu-style" href="?do=experience">
            <div class="mainmu">經歷管理 </div>
          </a>
          <a class="menu-style" href="?do=portfolio">
            <div class="mainmu">作品集管理 </div>
          </a>
          <a class="menu-style" href="?do=total">
            <div class="mainmu">進站總人數管理 </div>
          </a>
          <a class="menu-style" href="?do=icon">
            <div class="mainmu">Icon </div>
          </a>
          <a class="menu-style" href="?do=admin">
            <div class="mainmu">管理者帳號管理 </div>
          </a>
        </div>
        <div class="dbor" style="margin:3px; width:95%; height:11%; line-height:45px;">
          <span class="t">進站總人數 :<?= $Total->find(1)['total']; ?></span>
        </div>
      </div>
      <div class="di" style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
        <!--正中央-->
        <table width="100%">
          <tbody>
            <tr>
              <td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;" class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a>
              </td>
              <td><button onclick="location.replace(&#39;api/logout.php&#39;)" style="width:99%; margin-right:2px; height:50px;">管理登出</button></td>
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
      <div style="clear:both;"></div>
      <div style="width:1280px; left:0px; position:relative; background:#FC3; margin-top:4px; height:152px; display:block;">
        <span class="t" style="line-height:120px;">Roger_Rusume 後台管理系統</span>
      </div>
    </div>

</body>

</html>