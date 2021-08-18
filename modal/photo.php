<?php include_once "../base.php";?>

<h3 class='text-center mt-3'><?=$as['photo'];?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
<table class="m-auto">
    <tr>
        <td class="text-end"><?=$hs['photo'];?>：</td>
        <td class="text-end"><input type="file" name="img"></td>
    </tr>
</table>
<div class="text-center">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name='table' value='photo'>
</div>
</form>