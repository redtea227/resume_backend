<?php include_once "../base.php";?>

<h3 class="text-center mt-3"><?=$as['admin'];?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
<table class="m-auto">
    <tr>
        <td class="text-end">帳號：</td>
        <td><input type="text" name="acc"></td>
    </tr>
    <tr>
        <td class="text-end">密碼：</td>
        <td><input type="password" name="pw"></td>
    </tr>
    <tr>
        <td class="text-end">確認密碼：</td>
        <td><input type="password" name="pw2"></td>
    </tr>
</table>
<div class="text-center">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name="table" value="admin">
</div>
</form>