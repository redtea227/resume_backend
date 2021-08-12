<?php include_once "../base.php";

$chk=$Admin->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);

if($chk>0){
  if ($_POST['acc']=='admin') {
      $_SESSION['admin']=1;
      to("../backend.php?do=bg");
  }else{
    $_SESSION['admin']=1;
    to("../index.php");
  }
}else{
    echo "<script>";
    echo  "alert('帳號密碼錯誤');\n";
    echo "location.href='../login.php'";
    echo "</script>";
}
