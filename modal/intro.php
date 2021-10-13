<?php include_once "../base.php"; ?>

<h3 class='text-center mt-3'><?= $as['intro']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
  <div class="mx-auto w-50">
    <label for="text" class="form-label fs-5">簡介</label>
    <textarea name="text" id="text" class="form-control" style="height: 200px"></textarea>
  </div>
  <div class="text-center mt-3">
    <input type="submit" class="btn btn-success <?=($_SESSION['login'] != 'roger')?'disabled':'';?>" value="新增">
    <input type="reset" class="btn btn-success" value="重置">
    <input type="hidden" name='table' value='intro'>
  </div>
</form>