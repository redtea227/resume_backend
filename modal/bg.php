<?php include_once "../base.php"; ?>

<h3 class='text-center mt-3'><?= $as['bg']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
  <div class="mx-auto w-50 mb-3 fs-5">
    <label for="img" class="form-label">背景圖片</label>
    <input class="form-control" type="file" name="img" id="img">
  </div>
  <div class="mx-auto w-50 mb-3">
    <label for="text" class="form-label fs-5">替代文字</label>
    <input type="text" name="text" class="form-control" id="text">
  </div>
  <div class="text-center">
    <input type="submit" class="btn btn-success <?=($_SESSION['login'] != 'roger')?'disabled':'';?>" value="新增">
    <input type="reset" class="btn btn-success" value="重置">
    <input type="hidden" name='table' value='bg'>

  </div>
</form>