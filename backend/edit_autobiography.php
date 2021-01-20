<div>
  <h2>自傳管理</h2>
  <hr>
<?php
  include_once "base.php";
  $self=$Self->find($_GET['id']);
?>
<form action="api/edit_autobiography.php" method="post">
  <div>自傳名稱: <input type="text" name="name" value="<?=$self['name'];?>"></div>
  <div>請輸入你的自傳內容:</div>
  <textarea name="text" cols="100" rows="20"><?=$self['text'];?></textarea>
  <input type="hidden" name="id" value="<?=$self['id'];?>">
  <div>
    <button class="btn btn-info" type="submit">提交</button>
    <button class="btn btn-danger"><a href="backend.php?do=autobiography" class="text-decoration-none text-light">取消</a></button>
  </div>
</form>
</div>