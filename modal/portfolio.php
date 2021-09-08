<?php include_once "../base.php"; ?>

<h3 class='text-center mt-3'><?= $as['portfolio']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
  <div class="mx-auto w-50 mb-2 fs-5">
    <label for="img" class="form-label">作品圖</label>
    <input class="form-control" type="file" name="img" id="img">
  </div>
  <div class="mx-auto w-50 mb-2">
    <label for="width" class="form-label fs-5">分類</label>
    <select name="type" class="form-select" id="width">
      <option value="frontend">frontend</option>
      <option value="backend">backend</option>
      <option value="photo">photo</option>
    </select>
  </div>
  <div class="mx-auto w-50 mb-2">
    <label for="subject" class="form-label fs-5">主題</label>
    <input type="text" name="subject" class="form-control" id="subject">
  </div>
  <div class="mx-auto w-50 mb-2">
    <label for="text" class="form-label fs-5">敘述</label>
    <textarea name="text" id="text" class="form-control" style="height: 80px"></textarea>
  </div>
  <div class="mx-auto w-50 mb-2">
    <label for="href1" class="form-label fs-5">DEMO 網址</label>
    <input type="text" name="href1" class="form-control" id="href1">
  </div>
  <div class="mx-auto w-50 mb-4">
    <label for="href2" class="form-label fs-5">GITHUB 網址</label>
    <input type="text" name="href2" class="form-control" id="href2">
  </div>
  <div class="text-center">
    <input type="submit" class="btn btn-success" value="新增">
    <input type="reset" class="btn btn-success" value="重置">
    <input type="hidden" name='table' value='portfolio'>
  </div>
</form>