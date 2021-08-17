<div style="width:99%; margin:10px auto;">
  <h4 class="text-center p-2"><?= $ts[$do]; ?></h4>

  <form method="post" action="api/edit.php">
    <table width="100%" class="table table-bordered  table-striped text-center">
      <tbody>
        <tr>
          <td width="80%">自我介紹</td>
          <td width="10%">顯示</td>
          <td width="10%">刪除</td>
        </tr>

        <?php

        $rows = $Intro->all();
        foreach ($rows as $key => $value) {
        ?>
          <tr>

            <td>
              <textarea name="text[]" style="width:90%;height:200px;"><?= $value['text']; ?></textarea>
            </td>
            <td>
              <input type="checkbox" name="sh" value="<?= $value['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?>>
            </td>
            <td>
              <input type="checkbox" name="del[]" value="<?= $value['id']; ?>">
            </td>

            <input type="hidden" name="id[]" value="<?= $value['id']; ?>">
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <table style="margin-top:40px; width:70%;">
      <tbody>
        <tr>
          <td width="200px">
            <input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?= $do; ?>.php&#39;)" value="<?= $as[$do]; ?>">
          </td>
          <td class="text-center">
            <input type="submit" value="修改確定">
            <input type="reset" value="重置">
            <input type="hidden" name="table" value="<?= $do; ?>">
          </td>
        </tr>
      </tbody>
    </table>

  </form>
</div>
</div>