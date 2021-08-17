<div style="width:99%; margin:10px auto;">
  <h4 class="text-center p-2"><?= $ts[$do]; ?></h4>

  <form method="post" action="api/edit.php">
    <table width="100%" class="table table-bordered  table-striped text-center">
      <tbody>
        <tr>
          <td>作品圖</td>
          <td>分類</td>
          <td>主題</td>
          <td>敘述</td>
          <td>網址</td>
          <td width="5%">顯示</td>
          <td width="5%">刪除</td>
          <td></td>
        </tr>
        <?php

        $all = $Portfolio->count();
        $div = 5;
        $pages = ceil($all / $div);
        $now = isset($_GET['p']) ? $_GET['p'] : 1;
        $start = ($now - 1) * $div;
        $rows = $Portfolio->all(" limit $start,$div");
        foreach ($rows as $key => $value) {
        ?>
          <tr>
            <td>
              <img src="img/<?= $value['img']; ?>" style="width:100px;height:68px;">
            </td>
            <td>
              <input type="text" name="type[]" value="<?= $value['type']; ?>" style="width:100px">
            </td>
            <td>
              <input type="text" name="subject[]" value="<?= $value['subject']; ?>">
            </td>
            <td>
              <input type="text" name="text[]" value="<?= $value['text']; ?>">
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
            <td>
              <input type="button" value="更換圖片" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/portfolio_update.php?id=<?= $value['id']; ?>&#39;)">
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
        echo "<a href='?do=portfolio&p=" . ($now - 1) . "'> < </a>";
      }

      for ($i = 1; $i <= $pages; $i++) {
        $fontsize = ($now == $i) ? '24px' : '16px';
        echo "<a href='?do=portfolio&p=$i' style='font-size:$fontsize'> $i </a>";
      }

      if (($now + 1) <= $pages) {
        echo "<a href='?do=portfolio&p=" . ($now + 1) . "'> > </a>";
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