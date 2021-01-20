<div class="p-5 text-secondary">
    <div class="title">作品管理</div>
    <hr>
    <?php
  include_once "base.php";
  
  $portfolios=$Portfolio->all();
  
  if(!empty($portfolios)){
    ?>
  <form action="api/edit_portfolio.php" method="post">
  <div>
    <table width="100%" class="text-center">
      <tr class="bg-info  text-light">
        <td>作品圖</td>
        <td>作品名稱</td>
        <td>顯示</td>
        <td>刪除</td>
        <td>操作</td>
      </tr>
      
      <?php

foreach($portfolios as $por){
  ?>
  
  <tr>
    <td><img src="img/<?=$por['img'];?>" style="width:100px;height:80px"></td>
    <td><?=$por['name'];?></td>
    <td><input type="checkbox" name="sh[]" value="<?=$por['id'];?>" <?=($por['sh']=="1")?"checked":"";?>></td>
    <td><input type="checkbox" name="del[]" value="<?=$por['id'];?>"></td>
    <td><a href="backend.php?do=edit_portfolio&id=<?=$por['id'];?>">編輯</a></td>
    <input type="hidden" name="id[]" value="<?=$por['id'];?>">
  </tr>
  <?php    
    }
  }
  ?>
    </table>
  </div>
  <div class="text-center mt-5"><button class="btn btn-outline-warning" type="submit">確定編輯</button></div>
</form>
  <div class="add" onclick="edit('#myPor','./show/portfolio.php')"><i class="fas fa-plus"></i>新增經歷資料</div>
  <div id="myPor"></div>
</div>

<script>
function edit(y,url){
	if(y&&url)
	$(y).load(url)
}
</script>