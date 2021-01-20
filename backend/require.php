  <div class="p-5 text-secondary">
    <div class="title">求職條件管理</div>
    <hr>
    <?php
  include_once "base.php";
  $reqs=$Require->all();
  if(!empty($reqs)){
    ?>
  <form action="api/edit_require.php" method="post">
  <div>
    <table width="100%" class="text-center">
      <tr class="bg-info  text-light">
        <td>求職條件</td>
        <td>顯示</td>
        <td>刪除</td>
        <td>操作</td>
      </tr>
      <?php
    foreach($reqs as $req){
      ?>
      <tr>
        <td><?=$req['title'];?></td>
        <td><input type="radio" name="sh" value="<?=$req['id'];?>" <?=($req['sh']=="1")?"checked":"";?>></td>
        <td><input type="checkbox" name="del[]" value="<?=$req['id'];?>"></td>
        <td><a href="backend.php?do=edit_require&id=<?=$req['id'];?>">編輯</a></td>
        <input type="hidden" name="id[]" value="<?=$req['id'];?>">
      </tr>
      
      <?php
    }
  }
  
  ?>
    </table>
  </div>
  <div class="text-center mt-5"><button class="btn btn-outline-warning" type="submit">確定編輯</button></div>
</form>
  <div class="add" onclick="edit('#myReq','./show/require.php')"><i class="fas fa-plus"></i>新增求職條件</div>
  <div id="myReq"></div>
</div>

<script>
function edit(y,url){
	if(y&&url)
	$(y).load(url)
}
</script>