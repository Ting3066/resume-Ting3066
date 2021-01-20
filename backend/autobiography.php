  <div class="text-secondary p-5">
    <div class="title">自傳管理</div>
    <hr>
    <?php
  include_once "base.php";
  $autos=$Auto->all();
  if(!empty($autos)){
    ?>
  <form action="api/edit_autobiography.php" method="post">
  <div>
    <table width="100%" class="text-center">
      <tr class="bg-info  text-light">
        <td>自傳名稱</td>
        <td>顯示</td>
        <td>刪除</td>
        <td>操作</td>
      </tr>
      <?php
    foreach($autos as $auto){
      ?>
      <tr>
        <td><?=$auto['name'];?></td>
        <td><input type="radio" name="sh" value="<?=$auto['id'];?>" <?=($auto['sh']=="1")?"checked":"";?>></td>
        <td><input type="checkbox" name="del[]" value="<?=$auto['id'];?>"></td>
        <td><a href="backend.php?do=edit_autobiography&id=<?=$auto['id'];?>">編輯</a></td>
        <input type="hidden" name="id[]" value="<?=$auto['id'];?>">
      </tr>
      
      <?php
    }
  }
  
  ?>
    </table>
  </div>
  <div class="text-center mt-5"><button class="btn btn-outline-warning" type="submit">確定編輯</button></div>
</form>
  <div class="add" onclick="edit('#auto','./show/autobiography.php')"><i class="fas fa-plus"></i>新增自傳</div>
  <div id="auto"></div>
</div>

<script>
function edit(y,url){
	if(y&&url)
	$(y).load(url)
}
</script>