<div class="mt-4">
  <h4 class="text-center p-2"><?= $ts[$do]; ?></h4>

  <form method="post" action="api/edit.php">
    <table class="table table-bordered  table-striped text-center align-middle">
      <tbody>
        <tr>
          <td>經驗</td>
          <td>公司</td>
          <td>時間</td>
          <td>內容</td>
          <td width="5%">顯示</td>
          <td width="5%">刪除</td>
        </tr>

        <?php

        $all = $Experience->count();
        $div = 3;
        $pages = ceil($all / $div);
        $now = isset($_GET['p']) ? $_GET['p'] : 1;
        $start = ($now - 1) * $div;
        $rows = $Experience->all(" limit $start,$div");
        foreach ($rows as $key => $value) {
        ?>
          <tr>

            <td>
              <input type="text" name="name[]" value="<?= $value['name']; ?>" class="form-control">
            </td>
            <td>
              <input type="text" name="company[]" value="<?= $value['company']; ?>" class="form-control">
            </td>
            <td>
              <input type="text" name="time[]" value="<?= $value['time']; ?>" class="form-control">
            </td>
            <td>
              <textarea name="content[]" class="form-control" style="width:400px;height:150px;"><?= $value['content']; ?></textarea>
            </td>
            <td>
              <input type="checkbox" name="sh[]" class="form-check-input" value="<?= $value['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?>>
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
    <div class="text-center">
      <?php
      if (($now - 1) > 0) {
        echo "<a href='?do=experience&p=" . ($now - 1) . "' class='text-decoration-none'> < </a>";
      }

      for ($i = 1; $i <= $pages; $i++) {
        $fontsize = ($now == $i) ? '24px' : '16px';
        echo "<a href='?do=experience&p=$i' style='font-size:$fontsize' class='text-decoration-none'> $i </a>";
      }

      if (($now + 1) <= $pages) {
        echo "<a href='?do=experience&p=" . ($now + 1) . "' class='text-decoration-none'> > </a>";
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