<?php include_once "../base.php"; ?>

<h3 class='text-center'><?= $as['typewriter']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
  <table style="margin:auto;">
    <tr>
      <td style="text-align:right">名言 : </td>
      <td style="text-align:right"><input type="text" name="first"></td>
    </tr>
    <tr>
      <td style="text-align:right">名字 : </td>
      <td style="text-align:right"><input type="text" name="second"></td>
    </tr>
    <tr>
      <td style="text-align:right">職位 : </td>
      <td style="text-align:right"><input type="text" name="third"></td>
    </tr>
  </table>
  <div class="text-center">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name="table" value="typewriter">
  </div>
</form>