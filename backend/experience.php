  <div class="p-5 text-secondary">
    <div class="title">經歷管理</div>
    <hr>
    <?php
  include_once "base.php";
  
  $exs=$Experience->all();
  
  if(!empty($exs)){
    ?>
  <form action="api/edit_experience.php" method="post">
  <div>
    <table width="100%" class="text-center">
      <tr class="bg-info  text-light">
        <td>經歷</td>
        <td>顯示</td>
        <td>刪除</td>
        <td>操作</td>
      </tr>
      
      <?php

foreach($exs as $ex){
  ?>
  
  <tr>
    <td><?=$ex['companyname'];?></td>
    <td><input type="checkbox" name="sh[]" value="<?=$ex['id'];?>" <?=($ex['sh']=="1")?"checked":"";?>></td>
    <td><input type="checkbox" name="del[]" value="<?=$ex['id'];?>"></td>
    <td><a href="backend.php?do=edit_experience&id=<?=$ex['id'];?>">編輯</a></td>
    <input type="hidden" name="id[]" value="<?=$ex['id'];?>">
  </tr>
  <?php    
    }
  }
  ?>
    </table>
  </div>
  <div class="text-center mt-5"><button class="btn btn-outline-warning" type="submit">確定編輯</button></div>
</form>
  <div class="add" onclick="edit('#myEx','./show/experience.php')"><i class="fas fa-plus"></i>新增經歷資料</div>
  <div id="myEx"></div>
</div>

<script>
function edit(y,url){
	if(y&&url)
	$(y).load(url)
}
</script>