<div>
  <h2>學歷管理</h2>
  <hr>
<?php
  include_once "base.php";
  $edu=$Education->find($_GET['id']);
?>
<form action="api/edit_education.php" method="post">
  <table>
    <tr>
      <td>學校名稱:</td>
      <td><input type="text" name="schoolname" value="<?=$edu['schoolname'];?>"></td>
    </tr>
    <tr>
      <td>科系:</td>
      <td><input type="text" name="department" value="<?=$edu['department'];?>"></td>
    </tr>
    <tr>
      <td>就學狀態:</td>
      <td>
        <input type="radio" name="type" value="在學中" <?=($edu['type']=="在學中")?'checked':'';?>>在學中
        <input type="radio" name="type" value="畢業" <?=($edu['type']=="畢業")?'checked':'';?>>畢業
      </td>
    </tr>
    <tr>
      <td>其他說明:</td>
      <td><textarea name="text" cols="50" rows="10"><?=$edu['text'];?></textarea></td>
    </tr>
    <input type="hidden" name="id" value="<?=$edu['id'];?>">
  </table>
  <div class="text-center">
    <button class="btn btn-info" type="submit">確定修改</button>
    <button class="btn btn-secondary" type="reset">重置</button>
  </div>
</form>
</div>