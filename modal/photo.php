<?php include_once "../base.php"; ?>

<h3 class='text-center mt-3'><?= $as['photo']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
  <div class="mx-auto w-50">
    <input class="form-control" type="file" name="img">
  </div>
  <div class="text-center mt-3">
    <input type="submit" class="btn btn-success <?=($_SESSION['login'] != 'roger')?'disabled':'';?>" value="新增">
    <input type="reset" class="btn btn-success" value="重置">
    <input type="hidden" name='table' value='photo'>
  </div>
</form>