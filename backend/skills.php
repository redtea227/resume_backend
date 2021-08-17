<div style="width:99%; margin:10px auto;">
  <h4 class="text-center p-2"><?= $ts[$do]; ?></h4>

  <form method="post" action="api/edit.php">
    <table width="100%" class="table table-bordered  table-striped text-center">
      <tbody>
        <tr>
          <td>技能</td>
          <td>level</td>
          <td>width</td>
          <td>顏色</td>
          <td>位置</td>
          <td>顯示</td>
          <td>刪除</td>
        </tr>

        <?php
        $all = $Skills->count();
        $div = 8;
        $pages = ceil($all / $div);
        $now = isset($_GET['p']) ? $_GET['p'] : 1;
        $start = ($now - 1) * $div;
        $rows = $Skills->all(" limit $start,$div");
        foreach ($rows as $key => $value) {
        ?>
          <tr>

            <td>
              <input type="text" name="name[]" value="<?= $value['name']; ?>" style="width:150px">
            </td>
            <td>
              <input type="text" name="level[]" value="<?= $value['level']; ?>">
            </td>
            <td>
              <input type="text" name="width[]" value="<?= $value['width']; ?>" style="width:100px">
            </td>
            <td>
              <input type="text" name="color[]" value="<?= $value['color']; ?>">
            </td>
            <td>
              <input type="text" name="position[]" value="<?= $value['position']; ?>" style="width:100px">
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
    <div class="text-center">
      <?php
      if (($now - 1) > 0) {
        echo "<a href='?do=skills&p=" . ($now - 1) . "'> < </a>";
      }

      for ($i = 1; $i <= $pages; $i++) {
        $fontsize = ($now == $i) ? '24px' : '16px';
        echo "<a href='?do=skills&p=$i' style='font-size:$fontsize'> $i </a>";
      }

      if (($now + 1) <= $pages) {
        echo "<a href='?do=skills&p=" . ($now + 1) . "'> > </a>";
      }

      ?>
    </div>
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