<?php include_once "../base.php";?>

<h3 class='cent'>更換大頭照圖片</h3>
<hr>

<form action="api/upload.php" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td style="text-align:right"><?=$hs['photo'];?>：</td>
        <td style="text-align:right"><input type="file" name="img"></td>
    </tr>
</table>
<div class="cent">
    <input type="submit" value="更新">
    <input type="reset" value="重置">
    <input type="hidden" name='table' value='photo'>
    <input type="hidden" name='id' value='<?=$_GET['id'];?>'>

</div>
</form>