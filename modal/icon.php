<?php include_once "../base.php"; ?>

<h3 class='text-center mt-3'><?= $as['icon']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
  <table class="m-auto">
    <tr>
      <td class="text-end">名稱 : </td>
      <td class="text-end"><input type="text" name="name"></td>
    </tr>
    <tr>
      <td class="text-end">i class : </td>
      <td class="text-end"><input type="text" name="class"></td>
    </tr>
    <tr>
      <td class="text-end">網址 : </td>
      <td class="text-end"><input type="text" name="href"></td>
    </tr>
  </table>
  <div class="text-center">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name="table" value="icon">
  </div>
</form>