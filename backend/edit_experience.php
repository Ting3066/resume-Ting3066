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
      <td>任職時間:</td>
      <td>
        <input type="text" name="time" value="<?=$ex['time'];?>">
      </td>
    </tr>
    <tr>
      <td rowspan="<?=count(explode(",",$ex['text']))+1;?>">職務說明:</td>
      
    </tr>
        <?php
        $texts=explode(",",$ex['text']);
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
    <input type="hidden" name="id" value="<?=$ex['id'];?>">
  </table>
  <div class="text-center">
    <button class="btn btn-info" type="submit">確定編輯</button>
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