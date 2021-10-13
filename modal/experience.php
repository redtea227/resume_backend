<?php include_once "../base.php"; ?>

<h3 class='text-center mt-3'><?= $as['experience']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
  <div class="mx-auto w-50 mb-3">
    <label for="name" class="form-label fs-5">經歷</label>
    <input type="text" name="name" class="form-control" id="name">
  </div>
  <div class="mx-auto w-50 mb-3">
    <label for="company" class="form-label fs-5">公司</label>
    <input type="text" name="company" class="form-control" id="company">
  </div>
  <div class="mx-auto w-50 mb-3">
    <label for="time" class="form-label fs-5">時間</label>
    <input type="text" name="time" class="form-control" id="time">
  </div>
  <div class="mx-auto w-50 mb-3">
    <label for="content" class="form-label fs-5">敘述</label>
    <textarea name="content" id="content" class="form-control" style="height: 200px"></textarea>
  </div>
  <div class="text-center">
    <input type="submit" class="btn btn-success <?=($_SESSION['login'] != 'roger')?'disabled':'';?>" value="新增">
    <input type="reset" class="btn btn-success" value="重置">
    <input type="hidden" name="table" value="experience">
  </div>
</form>