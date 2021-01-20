<div>
  <h2>求職條件管理</h2>
  <hr>
  <?php
    include_once "base.php";
    $req=$Require->find($_GET['id']);
  ?>
  <form action="api/edit_require.php" method="post">
  <table>
    <tr>
      <td>希望性質:</td>
      <td>
        <input type="radio" name="type" value="全職工作" <?=($req['type']=="全職工作")?"checked":"";?>>全職工作
        <input type="radio" name="type" value="兼職工作" <?=($req['type']=="兼職工作")?"checked":"";?>>兼職工作
      </td>
    </tr>
    <tr>
      <td>上班時段:</td>
      <td>
        <input type="radio" name="time" value="日班" <?=($req['time']=="日班")?"checked":"";?>>日班
        <input type="radio" name="time" value="夜班" <?=($req['time']=="夜班")?"checked":"";?>>夜班
      </td>
    </tr>
    <tr>
      <td>希望地點:</td>
      <td><input type="text" name="location" value="<?=$req['location'];?>"></td>
    </tr>
    <tr>
      <td>希望職稱:</td>
      <td><input type="text" name="title" value="<?=$req['title'];?>"></td>
    </tr>
    <input type="hidden" name="id" value="<?=$req['id'];?>">
  </table>
  <div class="text-center">
    <button class="btn btn-info" type="submit">確定編輯</button>
    <button class="btn btn-secondary" type="reset">重置</button>
  </div>
</form>
</div>