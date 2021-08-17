<?php include_once "../base.php";?>

<h3 class='text-center'><?=$as['bg'];?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td style="text-align:right"><?=$hs['bg'];?>：</td>
        <td style="text-align:right"><input type="file" name="img"></td>
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