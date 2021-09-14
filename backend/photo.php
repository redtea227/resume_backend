<div class="mt-4">
  <h4 class="text-center p-2"><?= $ts[$do]; ?></h4>

  <form method="post" action="api/edit.php">
    <table class="table table-bordered  table-striped text-center align-middle">
      <tbody>
        <tr>
          <td width="70%">大頭照</td>
          <td width="10%">顯示</td>
          <td width="10%">刪除</td>
          <td></td>
        </tr>
        <?php

        $rows = $Photo->all();
        foreach ($rows as $key => $value) {
        ?>
          <tr>
            <td>
              <img src="img/<?= $value['img']; ?>" style="width:140px;height:160px;">
            </td>
            <td>
              <input type="radio" name="sh" value="<?= $value['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?> class="form-check-input">
            </td>
            <td>
              <input type="checkbox" name="del[]" value="<?= $value['id']; ?>" class="form-check-input">
            </td>
            <td>
              <input type="button" class="btn btn-outline-success" value="更換照片" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/photo_update.php?id=<?= $value['id']; ?>&#39;)">
            </td>
            <input type="hidden" name="id[]" value="<?= $value['id']; ?>">
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <table style="margin-top:20px; width:80%;">
      <tbody>
        <tr>
          <td width="200px">
            <input type="button" class="btn btn-success" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?= $do; ?>.php&#39;)" value="<?= $as[$do]; ?>">
          </td>
          <td class="text-center">
            <input type="submit" value="修改確定" class="btn btn-success <?=($_SESSION['login'] != 'roger')?'disabled':'';?>">
            <input type="reset" value="重置" class="btn btn-success">
            <input type="hidden" name="table" value="<?= $do; ?>">
          </td>
        </tr>
      </tbody>
    </table>

  </form>
</div>
</div>