<div class="mt-4">
  <h4 class="text-center p-2"><?= $ts[$do]; ?></h4>

  <form method="post" action="api/edit.php">
    <table class="table table-bordered  table-striped text-center align-middle">
      <tbody>
        <tr>
          <td>作品圖</td>
          <td width="13%">分類</td>
          <td width="13%">主題</td>
          <td width="24%">敘述</td>
          <td>網址</td>
          <td width="5%">顯示</td>
          <td width="5%">刪除</td>
          <td></td>
        </tr>
        <?php

        $all = $Portfolio->count();
        $div = 3;
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
              <select name="type[]" class="form-select">
                <option value="<?= $value['type']; ?>"><?= $value['type']; ?></option>
                <option value="frontend">frontend</option>
                <option value="backend">backend</option>
                <option value="photo">photo</option>
              </select>
            </td>
            <td>
              <input type="text" name="subject[]" value="<?= $value['subject']; ?>" class="form-control">
            </td>
            <td>
              <textarea name="text[]" class="form-control" style="height: 120px"><?= $value['text']; ?></textarea>
            </td>
            <td>
              <i class="fas fa-link fa-1x me-2"></i><input type="text" name="href1[]" value="<?= $value['href1']; ?>" class="form-control d-inline-block" style="width:85%"><br>
              <i class="fab fa-github fa-1x me-2"></i><input type="text" name="href2[]" value="<?= $value['href2']; ?>" class="form-control d-inline-block" style="width:85%">
            </td>
            <td>
              <input type="checkbox" name="sh[]" class="form-check-input" value="<?= $value['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?>>
            </td>
            <td>
              <input type="checkbox" name="del[]" class="form-check-input" value="<?= $value['id']; ?>">
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
    <nav>
      <ul class="pagination justify-content-center">
        <?php
        if (($now - 1) > 0) {
          echo "<li class='page-item'><a class='page-link' href='?do=portfolio&p=" . ($now - 1) . "'> <span>&laquo;</span> </a></li>";
        }

        for ($i = 1; $i <= $pages; $i++) {
          $fontsize = ($now == $i) ? '24px' : '16px';
          echo "<li class='page-item'><a href='?do=portfolio&p=$i' style='font-size:$fontsize' class='page-link'> $i </a></li>";
        }

        if (($now + 1) <= $pages) {
          echo "<li class='page-item'><a class='page-link' href='?do=portfolio&p=" . ($now + 1) . "'> <span>&raquo;</span> </a></li>";
        }
        ?>
      </ul>
    </nav>
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