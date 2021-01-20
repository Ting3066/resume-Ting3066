<form action="api/add_autobiography.php" method="post">
  <div>自傳名稱: <input type="text" name="name"></div>
  <div>請輸入你的自傳內容:</div>
  <textarea name="text" cols="100" rows="20"></textarea>
  <div>
    <button class="btn btn-outline-info" type="submit">提交</button>
    <button class="btn btn-outline-secondary"><a href="backend.php?do=autobiography">取消</a></button>
  </div>
</form>