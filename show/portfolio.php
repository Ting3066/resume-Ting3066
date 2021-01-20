<form action="api/add_portfolio.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
      <td>作品圖片:</td>
      <td>
        <input type="file" name="img">
      </td>
    </tr>
    <tr>
      <td>作品名稱:</td>
      <td>
        <input type="text" name="name">
      </td>
    </tr>
    <tr>
      <td>作品連結:</td>
      <td><input type="text" name="href"></td>
    </tr>
    <tr>
      <td>作品說明:</td>
      <td><textarea name="text" cols="50" rows="10"></textarea></td>
    </tr>
  </table>
  <div class="text-center">
    <button class="btn btn-outline-info" type="submit">確定編輯</button>
    <button class="btn btn-outline-secondary"><a href="backend.php?do=portfolio">取消</a></button>
  </div>
</form>