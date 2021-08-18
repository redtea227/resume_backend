<?php include_once "../base.php";?>

<h3 class='text-center mt-3'><?=$as['bg'];?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
<table class="m-auto">
    <tr>
        <td class="text-end"><?=$hs['bg'];?>：</td>
        <td class="text-end"><input type="file" name="img"></td>
    </tr>
    <tr>
        <td>標題區替代文字：</td>
        <td><input type="text" name="text"></td>
    </tr>
</table>
<div class="text-center">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name='table' value='bg'>

</div>
</form>