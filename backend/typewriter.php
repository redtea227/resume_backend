<div class="mt-4">
  <h4 class="text-center p-2"><?= $ts[$do]; ?></h4>

  <form method="post" action="api/edit.php">
    <table class="table table-bordered  table-striped text-center align-middle">
      <tbody>
        <tr>
          <td>名言</td>
          <td>名字</td>
          <td>職稱</td>
          <td>顯示</td>
          <td>刪除</td>
        </tr>

        <?php
        $ty = $Typewriter->all();
        foreach ($ty as $key => $value) {
        ?>
          <tr>

            <td>
              <input type="text" name="first[]" value="<?= $value['first']; ?>" class="text-center form-control">
            </td>
            <td>
              <input type="text" name="second[]" value="<?= $value['second']; ?>" class="text-center form-control">
            </td>
            <td>
              <input type="text" name="third[]" value="<?= $value['third']; ?>" class="text-center form-control">
            </td>
            <td>
              <input type="radio" name="sh" class="form-check-input" value="<?= $value['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?>>
            </td>
            <td>
              <input type="checkbox" name="del[]" class="form-check-input" value="<?= $value['id']; ?>">
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
            <input type="submit" value="修改確定" class="btn btn-success">
            <input type="reset" value="重置" class="btn btn-success">
            <input type="hidden" name="table" value="<?= $do; ?>">
          </td>
        </tr>
      </tbody>
    </table>

  </form>
</div>
</div>