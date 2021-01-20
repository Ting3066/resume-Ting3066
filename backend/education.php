
  <div class="p-5 text-secondary">
    <div class="title">學歷管理</div>
    <hr>
    <?php
  include_once "base.php";
  
  $edus=$Education->all();
  
  if(!empty($edus)){
    ?>

<form action="api/edit_education.php" method="post">
<div>
  <table width="100%" class="text-center">
    <tr class="bg-info  text-light">
      <td>學歷</td>
      <td>顯示</td>
      <td>刪除</td>
      <td>操作</td>
    </tr>
    <?php

foreach($edus as $edu){
  ?>
  
  <tr>
    <td><?=$edu['schoolname'];?></td>
    <td><input type="checkbox" name="sh[]" value="<?=$edu['id'];?>" <?=($edu['sh']=="1")?"checked":"";?>></td>
    <td><input type="checkbox" name="del[]" value="<?=$edu['id'];?>"></td>
    <td><a href="backend.php?do=edit_education&id=<?=$edu['id'];?>">編輯</a></td>
    <input type="hidden" name="id[]" value="<?=$edu['id'];?>">
  </tr>
  
  <?php    
    }
  }
  ?>
    </table>
  </div>
  <div class="text-center mt-5"><button class="btn btn-outline-warning" type="submit">確定編輯</button></div>
</form>
  <div class="add" onclick="edit('#myEdu','./show/education.php')"><i class="fas fa-plus"></i>新增學歷資料</div>
  <div id="myEdu"></div>
</div>

<script>
function edit(y,url){
	if(y&&url)
	$(y).load(url)
}
</script>
