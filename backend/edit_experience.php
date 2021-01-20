<div>
  <h2>經歷管理</h2>
  <hr>
  <?php
    include_once "base.php";
    $ex=$Experience->find($_GET['id']);
  ?>
  <form action="api/edit_experience.php" method="post">
  <table>
    <tr>
      <td>公司名稱:</td>
      <td><input type="text" name="companyname" value="<?=$ex['companyname'];?>"></td>
    </tr>
    <tr>
      <td>職位:</td>
      <td><input type="text" name="job" value="<?=$ex['job'];?>"></td>
    </tr>
    <tr>
      <td>就業狀態:</td>
      <td>
        <input type="radio" name="type" value="在職" <?=($ex['type']=="在職")?"checked":"";?>>在職
        <input type="radio" name="type" value="離職" <?=($ex['type']=="離職")?"checked":"";?>>離職
      </td>
    </tr>
    <tr>
      <td>職務說明:</td>
      <td><textarea name="text" cols="50" rows="10"><?=$ex['text'];?></textarea></td>
    </tr>
    <input type="hidden" name="id" value="<?=$ex['id'];?>">
  </table>
  <div class="text-center">
    <button class="btn btn-info" type="submit">確定編輯</button>
    <button class="btn btn-secondary" type="reset">重置</button>
  </div>
</form>
</div>