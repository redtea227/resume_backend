<?php include_once "../base.php";?>

<h3 class='text-center mt-3'>更換背景圖片</h3>
<hr>

<form action="api/upload.php" method="post" enctype="multipart/form-data">
<table class="m-auto">
    <tr>
        <td class="text-end"><?=$hs['bg'];?>：</td>
        <td class="text-end"><input type="file" name="img"></td>
    </tr>
</table>
<div class="text-center">
    <input type="submit" value="更新">
    <input type="reset" value="重置">
    <input type="hidden" name='table' value='bg'>
    <input type="hidden" name='id' value='<?=$_GET['id'];?>'>

</div>
</form>