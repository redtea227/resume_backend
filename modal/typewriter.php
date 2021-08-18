<?php include_once "../base.php"; ?>

<h3 class='text-center mt-3'><?= $as['typewriter']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
  <table class="m-auto">
    <tr>
      <td class="text-end">名言 : </td>
      <td class="text-start"><input type="text" name="first" style="width: 250px"></td>
    </tr>
    <tr>
      <td class="text-end">名字 : </td>
      <td class="text-start"><input type="text" name="second" style="width: 250px"></td>
    </tr>
    <tr>
      <td class="text-end">職位 : </td>
      <td class="text-start"><input type="text" name="third" style="width: 250px"></td>
    </tr>
  </table>
  <div class="text-center">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name="table" value="typewriter">
  </div>
</form>