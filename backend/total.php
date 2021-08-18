<div class="mt-4">
  <h4 class="text-center p-2"><?= $ts[$do]; ?></h4>

  <form method="post" action="api/edit_total.php">
    <table style="margin:auto" class="table table-bordered  table-striped text-center">
      <tbody>
        <tr>
          <td width="50%"><?= $hs[$do]; ?></td>
          <td width="50%"><input type="text" name="total" value="<?= $Total->find(1)['total']; ?>"></td>
        </tr>
      </tbody>
    </table>
    <table style="margin-top:20px; width:80%;">
      <tbody>
        <tr>
          <td width="200px">
          </td>
          <td class="text-center">
            <input type="submit" value="修改確定" class="btn btn-success">
            <input type="reset" value="重置" class="btn btn-success">
          </td>
        </tr>
      </tbody>
    </table>

  </form>
</div>
</div>