<?php include_once "../base.php";?>

<h3 class='text-center mt-3'><?=$as['intro'];?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
<table class="m-auto">

    <tr>
        <td><?=$hs['intro'];?>：</td>
        <td><textarea name="text" style="width:500px;height:150px;"></textarea></td>
    </tr>
</table>
<div class="text-center">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name='table' value='intro'>
</div>
</form>