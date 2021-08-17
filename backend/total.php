<div style="width:99%; margin:10px auto;">
  <h4 class="text-center p-2"><?= $ts[$do]; ?></h4>

  <form method="post" action="api/edit_total.php">
    <table width="50%" style="margin:auto" class="table table-bordered  table-striped text-center">
      <tbody>
        <tr>

          <td width="50%"><?= $hs[$do]; ?></td>
          <td width="50%"><input type="text" name="total" value="<?= $Total->find(1)['total']; ?>"></td>
        </tr>
      </tbody>
    </table>
    <table style="margin-top:40px; width:70%;">
      <tbody>
        <tr>
          <td width="200px">
          </td>
          <td class="text-center">
            <input type="submit" value="修改確定">
            <input type="reset" value="重置">
          </td>
        </tr>
      </tbody>
    </table>

  </form>
</div>
</div>