<div class="mt-4">
  <h4 class="text-center p-2"><?= $ts[$do]; ?></h4>

  <form method="post" action="api/edit.php">
    <table class="table table-bordered table-striped text-center align-middle">
      <tbody>
        <tr>
          <td>帳號</td>
          <td>密碼</td>
          <td>刪除</td>
        </tr>

        <?php

        $rows = $Admin->all();
        foreach ($rows as $key => $value) {
        ?>
          <tr>

            <td>
              <input type="text" name='acc[]' value="<?= $value['acc']; ?>" class="form-control text-center">
            </td>
            <td>
              <input type="password" name="pw[]" value="<?= $value['pw']; ?>" class="form-control text-center">
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