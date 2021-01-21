<form action="api/add_require.php" method="post">
  <table>
    <tr>
      <td>希望職稱:</td>
      <td><input type="text" name="title"></td>
    </tr>
    <tr>
      <td>希望地點:</td>
      <td><input type="text" name="location"></td>
    </tr>
    <tr>
      <td>待遇:</td>
      <td>
        <input type="text" name="salary">
      </td>
    </tr>
    <tr>
      <td>可上班日:</td>
      <td>
        <input type="text" name="time">
      </td>
    </tr>
    
    
  </table>
  <div class="text-center">
    <button class="btn btn-outline-info" type="submit">確定編輯</button>
    <button class="btn btn-outline-secondary"><a href="backend.php?do=require">取消</a></button>
  </div>
</form>