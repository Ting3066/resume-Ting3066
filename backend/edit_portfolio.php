<div>
  <h2>作品管理</h2>
  <hr>
<?php
  include_once "base.php";
  $portfolio=$Portfolio->find($_GET['id']);
?>
<form action="api/edit_portfolio.php?id=<?=$_GET['id'];?>" method="post" enctype="multipart/form-data">
  <table>
    <tr>
      <td>作品圖:</td>
      <td>
        <img src="img/<?=$portfolio['img'];?>" style="width:100px;height:80px">
        <input type="file" name="img">
      </td>
    </tr>
    <tr>
      <td>作品名稱:</td>
      <td><input type="text" name="name" value="<?=$portfolio['name'];?>"></td>
    </tr>
    <tr>
      <td>作品連結:</td>
      <td>
        <input type="text" name="href" value="<?=$portfolio['href'];?>">
      </td>
    </tr>
    <tr>
      <td>作品說明:</td>
      <td><textarea name="text" cols="50" rows="10"><?=$portfolio['text'];?></textarea></td>
    </tr>
    <input type="hidden" name="id" value="<?=$portfolio['id'];?>">
  </table>
  <div class="text-center">
    <button class="btn btn-info" type="submit">確定修改</button>
    <button class="btn btn-secondary" type="reset">重置</button>
  </div>
</form>
</div>