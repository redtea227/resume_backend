<?php include_once "../base.php"; ?>

<h3 class='text-center'><?= $as['skills']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
  <table style="margin:auto;">
    <tr>
      <td style="text-align:right">技能 : </td>
      <td style="text-align:right"><input type="text" name="name"></td>
    </tr>
    <tr>
      <td style="text-align:right">level : </td>
      <td style="text-align:right"><input type="text" name="level"></td>
    </tr>
    <tr>
      <td style="text-align:right">width : </td>
      <td style="text-align:right"><input type="text" name="width"></td>
    </tr>
    <tr>
      <td style="text-align:right">position : </td>
      <td style="text-align:right"><input type="text" name="position"></td>
    </tr>
    <tr>
      <td style="text-align:right">color : </td>
      <td style="text-align:right"><input type="text" name="color"></td>
    </tr>
  </table>
  <div class="text-center">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name="table" value="skills">
  </div>
</form>