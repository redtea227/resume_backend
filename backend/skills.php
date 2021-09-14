<div class="mt-4">
  <h4 class="text-center p-2"><?= $ts[$do]; ?></h4>

  <form method="post" action="api/edit.php">
    <table class="table table-bordered  table-striped text-center align-middle">
      <tbody>
        <tr>
          <td>技能</td>
          <td>level</td>
          <td>width</td>
          <td>color (boostrap5)</td>
          <td>position</td>
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
              <input type="text" name="name[]" class="form-control text-center" value="<?= $value['name']; ?>">
            </td>
            <td>
              <input type="text" name="level[]" class="form-control text-center" value="<?= $value['level']; ?>">
            </td>
            <td>
              <select name="width[]" class="form-select">
                <option value="<?= $value['width']; ?>"><?= $value['width']; ?></option>
                <option value="90%">90%</option>
                <option value="80%">80%</option>
                <option value="70%">70%</option>
              </select>
            </td>
            <td>
              <select name="color[]" class="form-select">
                <option value="<?= $value['color']; ?>"><?= $value['color']; ?></option>
                <option value="bg-primary">bg-primary</option>
                <option value="bg-secondary">bg-secondary</option>
                <option value="bg-success">bg-success</option>
                <option value="bg-danger">bg-danger</option>
                <option value="bg-warning">bg-warning</option>
                <option value="bg-info">bg-info</option>
                <option value="bg-dark">bg-dark</option>
              </select>
            </td>
            <td>
              <select name="position[]" class="form-select">
                <option value="<?= $value['position']; ?>"><?= $value['position']; ?></option>
                <option value="left">left</option>
                <option value="right">right</option>
              </select>
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
    <nav>
      <ul class="pagination justify-content-center">
        <?php
        if (($now - 1) > 0) {
          echo "<li class='page-item'><a class='page-link' href='?do=skills&p=" . ($now - 1) . "'> <span>&laquo;</span> </a></li>";
        }

        for ($i = 1; $i <= $pages; $i++) {
          $fontsize = ($now == $i) ? '24px' : '16px';
          echo "<li class='page-item'><a href='?do=skills&p=$i' style='font-size:$fontsize' class='page-link'> $i </a></li>";
        }

        if (($now + 1) <= $pages) {
          echo "<li class='page-item'><a class='page-link' href='?do=skills&p=" . ($now + 1) . "'> <span>&raquo;</span> </a></li>";
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