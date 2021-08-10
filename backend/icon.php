<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
  <p class="t cent botli"><?= $ts[$do]; ?></p>

  <form method="post" action="api/edit.php">
    <table width="100%" class="cent">
      <tbody>
        <tr class="yel">
          <td>圖示</td>
          <td>名稱</td>
          <td>i class</td>
          <td>網址</td>
          <td>顯示</td>
          <td>刪除</td>
        </tr>

        <?php
        $icons = $Icon->all();
        foreach ($icons as $key => $value) {
        ?>
          <tr>
            <td>
              <i class="<?= $value['class']; ?>">
            </td>
            <td>
              <input type="text" name="name[]" value="<?= $value['name']; ?>">
            </td>
            <td>
              <input type="text" name="class[]" value="<?= $value['class']; ?>">
            </td>
            <td>
              <input type="text" name="href[]" value="<?= $value['href']; ?>">
            </td>
            <td>
              <input type="checkbox" name="sh[]" value="<?= $value['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?>>
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
          <td class="cent">
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