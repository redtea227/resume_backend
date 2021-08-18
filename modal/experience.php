<?php include_once "../base.php"; ?>

<h3 class='text-center mt-3'><?= $as['experience']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
  <table class="m-auto">
    <tr>
      <td class="text-end">經歷 : </td>
      <td class="text-start"><input type="text" name="name" class="w-100"></td>
    </tr>
    <tr>
      <td class="text-end">公司 : </td>
      <td class="text-start"><input type="text" name="company" class="w-100"></td>
    </tr>
    <tr>
      <td class="text-end">時間 : </td>
      <td class="text-start"><input type="text" name="time" class="w-100"></td>
    </tr>
    <tr>
      <td class="text-end">內容 : </td>
      <td>
      <textarea name="content" style="width:300px;height:200px"></textarea>
      <!-- <input type="text" name="content"> -->
    </td>
    </tr>
  </table>
  <div class="text-center">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name="table" value="experience">
  </div>
</form>