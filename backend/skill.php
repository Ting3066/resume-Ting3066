<div class="p-5 text-secondary">
    <div class="title">技能管理</div>
    <hr>
    <?php
  include_once "base.php";
  
  $skills=$Skill->all();
  
  if(!empty($skills)){
    ?>

<form action="api/edit_skill.php" method="post">
<div>
  <table width="100%" class="text-center">
    <tr class="bg-info  text-light">
      <td>技能名稱</td>
      <td>類別</td>
      <td>顯示</td>
      <td>刪除</td>
    </tr>
    <?php

foreach($skills as $skill){
  ?>
  
  <tr>
    <td><?=$skill['name'];?></td>
    <td>
      <select name="type[]">
        <option value="1" <?=($skill['type']==1)?"selected":"";?>>前端</option>
        <option value="2" <?=($skill['type']==2)?"selected":"";?>>後端</option>
        <option value="3" <?=($skill['type']==3)?"selected":"";?>>軟體工具</option>
        <option value="4" <?=($skill['type']==4)?"selected":"";?>>版本控制</option>
      </select>
    </td>
    <td><input type="checkbox" name="sh[]" value="<?=$skill['id'];?>" <?=($skill['sh']=="1")?"checked":"";?>></td>
    <td><input type="checkbox" name="del[]" value="<?=$skill['id'];?>"></td>
    <input type="hidden" name="id[]" value="<?=$skill['id'];?>">
  </tr>
  
  <?php    
    }
  }
  ?>
    </table>
  </div>
  <div class="text-center mt-5"><button class="btn btn-outline-warning" type="submit">確定編輯</button></div>
</form>
  <div class="add" onclick="edit('#mySkill','./show/skill.php')"><i class="fas fa-plus"></i>新增技能</div>
  <div id="mySkill"></div>
</div>

<script>
function edit(y,url){
	if(y&&url)
	$(y).load(url)
}
</script>
