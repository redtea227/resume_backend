<?php include_once "../base.php";?>

<h3 class='text-center'><?=$as['photo'];?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td style="text-align:right"><?=$hs['photo'];?>：</td>
        <td style="text-align:right"><input type="file" name="img"></td>
    </tr>
</table>
<div class="text-center">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name='table' value='photo'>
</div>
</form>