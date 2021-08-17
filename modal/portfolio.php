<?php include_once "../base.php";?>

<h3 class='text-center'><?=$as['portfolio'];?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td style="text-align:right"><?=$hs['portfolio'];?>：</td>
        <td style="text-align:right"><input type="file" name="img"></td>
    </tr>
    <tr>
      <td style="text-align:right">分類 : </td>
      <td style="text-align:left"><input type="text" name="type"></td>
    </tr>
    <tr>
      <td style="text-align:right">主題 : </td>
      <td style="text-align:left"><input type="text" name="subject"></td>
    </tr>
    <tr>
      <td style="text-align:right">敘述 : </td>
      <td style="text-align:left"><input type="text" name="text"></td>
    </tr>
    <tr>
      <td style="text-align:right">網址 : </td>
      <td style="text-align:left"><input type="text" name="href"></td>
    </tr>
</table>
<div class="text-center">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name='table' value='portfolio'>
</div>
</form>