<?php include_once "../base.php"; ?>

<h3 class='text-center mt-3'><?= $as['skills']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
  <table class="m-auto">
    <tr>
      <td class="text-end">技能 : </td>
      <td class="text-end"><input type="text" name="name"></td>
    </tr>
    <tr>
      <td class="text-end">level : </td>
      <td class="text-end"><input type="text" name="level"></td>
    </tr>
    <tr>
      <td class="text-end">width : </td>
      <td class="text-end">
        <select name="width" style="width:100%">
          <option value="70%">70%</option>
          <option value="80%">80%</option>
          <option value="90%">90%</option>
        </select>
        <!-- <input type="text" name="width"> -->
      </td>
    </tr>
    <tr>
      <td class="text-end">color : </td>
      <td class="text-end">
        <select name="color" style="width:100%">
          <option value="bg-primary">bg-primary</option>
          <option value="bg-secondary">bg-secondary</option>
          <option value="bg-success">bg-success</option>
          <option value="bg-danger">bg-danger</option>
          <option value="bg-warning">bg-warning</option>
          <option value="bg-info">bg-info</option>
          <option value="bg-dark">bg-dark</option>
        </select>
        <!-- <input type="text" name="color"> -->
      </td>
    </tr>
    <tr>
      <td class="text-end">position : </td>
      <td class="text-end">
        <select name="position" style="width:100%">
          <option value="left">left</option>
          <option value="right">right</option>
        </select>
        <!-- <input type="text" name="position"> -->
      </td>
    </tr>
  </table>
  <div class="text-center">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name="table" value="skills">
  </div>
</form>