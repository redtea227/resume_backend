<?php include_once "../base.php"; ?>

<h3 class='text-center mt-3'><?= $as['skills']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
  <div class="mx-auto w-25 mb-3">
    <label for="name" class="form-label fs-5">Name</label>
    <input type="text" name="name" class="form-control" id="name">
  </div>
  <div class="mx-auto w-25 mb-3">
    <label for="level" class="form-label fs-5">Level</label>
    <input type="text" name="level" class="form-control" id="level">
  </div>
  <div class="mx-auto w-25 mb-3">
    <label for="width" class="form-label fs-5">Width</label>
    <select name="width" class="form-select" id="width">
      <option value="70%">70%</option>
      <option value="80%">80%</option>
      <option value="90%">90%</option>
    </select>
  </div>

  <div class="mx-auto w-25 mb-3">
    <label for="color" class="form-label fs-5">Color</label>
    <select name="color" class="form-select" id="color">
      <option value="bg-primary">bg-primary</option>
      <option value="bg-secondary">bg-secondary</option>
      <option value="bg-success">bg-success</option>
      <option value="bg-danger">bg-danger</option>
      <option value="bg-warning">bg-warning</option>
      <option value="bg-info">bg-info</option>
      <option value="bg-dark">bg-dark</option>
    </select>
  </div>
  <div class="mx-auto w-25 mb-3">
    <label for="position" class="form-label fs-5">Position</label>
    <select name="position" class="form-select" id="position">
      <option value="left">left</option>
      <option value="right">right</option>
    </select>
  </div>
  <div class="text-center">
    <input type="submit" class="btn btn-success <?=($_SESSION['login'] != 'roger')?'disabled':'';?>" value="新增">
    <input type="reset" class="btn btn-success" value="重置">
    <input type="hidden" name="table" value="skills">
  </div>
</form>