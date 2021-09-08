<?php include_once "../base.php"; ?>

<h3 class="text-center mt-3"><?= $as['admin']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
  <div class="mx-auto w-50 mb-3">
    <label for="acc" class="form-label fs-5">帳號</label>
    <input type="text" name="acc" class="form-control" id="acc">
  </div>
  <div class="mx-auto w-50 mb-3">
    <label for="pw" class="form-label fs-5">密碼</label>
    <input type="text" name="pw" class="form-control" id="pw">
  </div>
  <div class="mx-auto w-50 mb-3">
    <label for="pw2" class="form-label fs-5">確認密碼</label>
    <input type="text" name="pw2" class="form-control" id="pw2">
  </div>
  <div class="text-center">
    <input type="submit" class="btn btn-success" value="新增">
    <input type="reset" class="btn btn-success" value="重置">
    <input type="hidden" name="table" value="admin">
  </div>
</form>