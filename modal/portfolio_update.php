<?php include_once "../base.php"; ?>

<h3 class='text-center mt-3'>更換作品集圖片</h3>
<hr>

<form action="api/upload.php" method="post" enctype="multipart/form-data">
  <div class="mx-auto w-50">
    <input class="form-control" type="file" name="img">
  </div>
  <div class="text-center mt-3">
    <input type="submit" class="btn btn-success" value="更新">
    <input type="reset" class="btn btn-success" value="重置">
    <input type="hidden" name='table' value='portfolio'>
    <input type="hidden" name='id' value='<?= $_GET['id']; ?>'>

  </div>
</form>