<?php include_once "../base.php"; ?>

<h3 class='text-center mt-3'><?= $as['typewriter']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
  <div class="mx-auto w-25 mb-3">
    <label for="first" class="form-label fs-5">名言</label>
    <input type="text" name="first" class="form-control" id="first">
  </div>
  <div class="mx-auto w-25 mb-3">
    <label for="second" class="form-label fs-5">名字</label>
    <input type="text" name="second" class="form-control" id="second">
  </div>
  <div class="mx-auto w-25 mb-3">
    <label for="third" class="form-label fs-5">職稱</label>
    <input type="text" name="third" class="form-control" id="third">
  </div>
  <div class="text-center">
    <input type="submit" class="btn btn-success" value="新增">
    <input type="reset" class="btn btn-success" value="重置">
    <input type="hidden" name="table" value="typewriter">
  </div>
</form>