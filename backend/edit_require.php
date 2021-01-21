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
      <td>希望職稱:</td>
      <td><input type="text" name="title" value="<?=$req['title'];?>"></td>
    </tr>
    <tr>
      <td>希望地點:</td>
      <td><input type="text" name="location" value="<?=$req['location'];?>"></td>
    </tr>
    <tr>
      <td>待遇:</td>
      <td>
        <input type="text" name="salary" value="<?=$req['salary'];?>">
      </td>
    </tr>
    <tr>
      <td>可上班日:</td>
      <td>
        <input type="text" name="time" value="<?=$req['time'];?>">
      </td>
    </tr>
    <input type="hidden" name="id" value="<?=$req['id'];?>">
  </table>
  <div class="text-center">
    <button class="btn btn-info" type="submit">確定編輯</button>
    <button class="btn btn-secondary" type="reset">重置</button>
  </div>
</form>
</div>