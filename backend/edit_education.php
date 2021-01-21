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
      <td rowspan="<?=count(explode(",",$edu['text']))+1;?>">其他說明:</td>
    </tr>
    <?php
        $texts=explode(",",$edu['text']);
        foreach($texts as $key => $text){
          ?>
        <tr>
          <td>
            <input type="text" name="text[]" value="<?=$text;?>">
          </td>
        </tr>
        <?php
        }
        ?>
      <tr class="text-center">
        <td colspan="2"><button type="button" class="btn btn-info" onclick="more(this)">新增欄位</button></td>
      </tr>
    <input type="hidden" name="id" value="<?=$edu['id'];?>">
  </table>
  <div class="text-center">
    <button class="btn btn-info" type="submit">確定修改</button>
    <button class="btn btn-secondary" type="reset">重置</button>
  </div>
</form>
</div>

<script>
function more(item){
  $(item).parents("tr").before(`
    <tr>
      <td></td>
      <td><input type="text" name="text[]"></td>
    </tr>
  `);
  
  
}
</script>