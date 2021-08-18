<?php include_once "../base.php";?>

<h3 class='text-center mt-3'><?=$as['portfolio'];?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
<table class="m-auto">
    <tr>
        <td class="text-end"><?=$hs['portfolio'];?>：</td>
        <td class="text-end"><input type="file" name="img"></td>
    </tr>
    <tr>
      <td class="text-end">分類 : </td>
      <td class="text-start">
      <select name="type" style="width:100%">
        <option value="frontend">frontend</option>
        <option value="backend">backend</option>
        <option value="photo">photo</option>
      </select>
      </td>
      <!-- <input type="text" name="type" value="frontend/backend/photo" style="width:100%"> -->
    </tr>
    <tr>
      <td class="text-end">主題 : </td>
      <td class="text-start"><input type="text" name="subject" style="width:100%"></td>
    </tr>
    <tr>
      <td class="text-end">敘述 : </td>
      <td class="text-start"><input type="text" name="text" style="width:100%"></td>
    </tr>
    <tr>
      <td class="text-end">網址 : </td>
      <td class="text-start"><input type="text" name="href" style="width:100%"></td>
    </tr>
</table>
<div class="text-center">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name='table' value='portfolio'>
</div>
</form>