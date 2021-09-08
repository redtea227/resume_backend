<?php include_once "../base.php"; ?>

<h3 class='text-center mt-3'><?= $as['icon']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
  <div class="mx-auto w-50 mb-3">
    <label for="name" class="form-label fs-5">名稱</label>
    <input type="text" name="name" class="form-control" id="name">
  </div>
  <div class="mx-auto w-50 mb-3">
    <label for="class" class="form-label fs-5">i class</label>
    <input type="text" name="class" class="form-control" id="class">
  </div>
  <div class="mx-auto w-50 mb-3">
    <label for="href" class="form-label fs-5">網址</label>
    <input type="text" name="href" class="form-control" id="href">
  </div>
  <div class="text-center">
    <input type="submit" class="btn btn-success" value="新增">
    <input type="reset" class="btn btn-success" value="重置">
    <input type="hidden" name="table" value="icon">
  </div>
</form>