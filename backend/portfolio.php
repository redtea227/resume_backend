<div class="mt-4">
  <h4 class="text-center p-2"><?= $ts[$do]; ?></h4>

  <form method="post" action="api/edit.php">
    <table class="table table-bordered  table-striped text-center">
      <tbody>
        <tr>
          <td>作品圖</td>
          <td>分類</td>
          <td>主題</td>
          <td>敘述</td>
          <td>網址</td>
          <td>顯示</td>
          <td>刪除</td>
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
              <img src="img/<?= $value['img']; ?>" style="width:120px;height:80px;">
            </td>
            <td>
              <select name="type[]" style="width:100px" class="mt-4">
                <option value="<?= $value['type']; ?>"><?= $value['type']; ?></option>
                <option value="frontend">frontend</option>
                <option value="backend">backend</option>
                <option value="photo">photo</option>
              </select>
              <!-- <input type="text" name="type[]" value="<?= $value['type']; ?>" style="width:100px"> -->
            </td>
            <td>
              <input type="text" name="subject[]" value="<?= $value['subject']; ?>" style="width:130px" class="mt-4">
            </td>
            <td>
              <textarea name="text[]" style="width: 100%;height: 80px"><?= $value['text']; ?></textarea>
              <!-- <input type="text" name="text[]" value="<?= $value['text']; ?>"> -->
            </td>
            <td>
            <i class="fas fa-link fa-1x me-2"></i><input type="text" name="href1[]" value="<?= $value['href1']; ?>" class="my-2"><br>
            <i class="fab fa-github fa-1x me-2"></i><input type="text" name="href2[]" value="<?= $value['href2']; ?>">
            </td>
            <td>
              <input type="checkbox" name="sh[]" value="<?= $value['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?> style="margin-top: 35px;">
            </td>
            <td>
              <input type="checkbox" name="del[]" value="<?= $value['id']; ?>"style="margin-top: 35px;">
            </td>
            <td>
              <input type="button" class="btn btn-outline-success" value="更換圖片" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/portfolio_update.php?id=<?= $value['id']; ?>&#39;)">
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