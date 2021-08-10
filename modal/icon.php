<?php include_once "../base.php"; ?>

<h3 class='cent'><?= $as['icon']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
  <table style="margin:auto;">
    <tr>
      <td style="text-align:right">名稱 : </td>
      <td style="text-align:right"><input type="text" name="name"></td>
    </tr>
    <tr>
      <td style="text-align:right">i class : </td>
      <td style="text-align:right"><input type="text" name="class"></td>
    </tr>
    <tr>
      <td style="text-align:right">網址 : </td>
      <td style="text-align:right"><input type="text" name="href"></td>
    </tr>
  </table>
  <div class="cent">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name="table" value="icon">
  </div>
</form>