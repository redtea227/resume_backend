<?php include_once "../base.php"; ?>

<h3 class='cent'><?= $as['experience']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
  <table style="margin:auto;">
    <tr>
      <td style="text-align:right">經驗 : </td>
      <td style="text-align:right"><input type="text" name="name"></td>
    </tr>
    <tr>
      <td style="text-align:right">公司 : </td>
      <td style="text-align:right"><input type="text" name="company"></td>
    </tr>
    <tr>
      <td style="text-align:right">時間 : </td>
      <td style="text-align:right"><input type="text" name="time"></td>
    </tr>
    <tr>
      <td style="text-align:right">內容 : </td>
      <td style="text-align:right"><input type="text" name="content"></td>
    </tr>
  </table>
  <div class="cent">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name="table" value="experience">
  </div>
</form>