<div class="text-secondary p-5">
  <div class="title">照片管理</div>
  <hr>
  <?php
  include_once "base.php";
  
  $images=$Image->all();
  
  if(!empty($images)){
    ?>
  <form action="api/edit_image.php" method="post">
    <div>
      <table width="100%" class="text-center">
        <tr class="bg-info  text-light">
          <td>照片</td>
          <td>顯示</td>
          <td>刪除</td>
        </tr>
        
        <?php

        foreach($images as $image){
          ?>
    
        <tr>
          <td><img src="./img/<?=$image['img'];?>" style="max-width:120px;"></td>
          <td><input type="radio" name="sh" value="<?=$image['id'];?>" <?=($image['sh']=="1")?"checked":"";?>></td>
          <td><input type="checkbox" name="del[]" value="<?=$image['id'];?>"></td>
          <input type="hidden" name="id[]" value="<?=$image['id'];?>">
        </tr>
        <?php    
          }
        }
        ?>
      </table>
    </div>
  <div class="text-center mt-5"><button class="btn btn-outline-warning" type="submit">確定編輯</button></div>
</form>
  <div class="add" onclick="edit('#myImg','./show/image.php')"><i class="fas fa-plus"></i>上傳圖片</div>
  <div id="myImg"></div>
</div>


<script>
function edit(y,url){
	if(y&&url)
	$(y).load(url)
}
</script>