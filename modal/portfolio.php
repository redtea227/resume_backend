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
      <td style="text-align:left">
      <select name="type" style="width:100%">
        <option value="frontend">frontend</option>
        <option value="backend">backend</option>
        <option value="photo">photo</option>
      </select>
      </td>
      <!-- <input type="text" name="type" value="frontend/backend/photo" style="width:100%"> -->
    </tr>
    <tr>
      <td style="text-align:right">主題 : </td>
      <td style="text-align:left"><input type="text" name="subject" style="width:100%"></td>
    </tr>
    <tr>
      <td style="text-align:right">敘述 : </td>
      <td style="text-align:left"><input type="text" name="text" style="width:100%"></td>
    </tr>
    <tr>
      <td style="text-align:right">網址 : </td>
      <td style="text-align:left"><input type="text" name="href" style="width:100%"></td>
    </tr>
</table>
<div class="text-center">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name='table' value='portfolio'>
</div>
</form>