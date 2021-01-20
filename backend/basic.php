<?php
include_once "base.php";
$basic=$Basic->find(1);
?>

<form action="api/edit_basic.php" method="post">
  <div class="text-secondary pl-5">
    <div class="my-5 title">基本資料管理</div>
    <div class="mb-5">姓名:<input class="ml-5" type="text" name="name" value="<?=$basic['name'];?>"></div>
    <div class="mb-5">生日:<input class="ml-5" type="text" name="birth" value="<?=$basic['birth'];?>"></div>
    <div class="mb-5">手機:<input class="ml-5" type="text" name="phone" value="<?=$basic['phone'];?>"></div>
    <div class="mb-5">信箱:<input class="ml-5" type="text" name="email" value="<?=$basic['email'];?>"></div>
    <div class="mb-5">頁首文字:<textarea class="ml-3" name="text" cols="50" rows="5"><?=$basic['text'];?></textarea></div>
    <input type="hidden" name="id" value="<?=$basic['id'];?>">
  </div>
  <div class="text-center">
    <button class="btn btn-outline-info" type="submit">確認編輯</button>
    <button class="btn btn-outline-secondary" type="reset">重置</button>
  </div>
</form>