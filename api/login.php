<?php include_once "../base.php";

$chk = $Admin->count(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);

if ($chk > 0) {
  $_SESSION['login'] = $_POST['acc'];
  to("../backend.php?do=bg");
} else {
  echo "<script>";
  echo  "alert('帳號密碼錯誤');\n";
  echo "location.href='../login.php'";
  echo "</script>";
}
