<form action="api/add_education.php" method="post">
  <table>
    <tr>
      <td>學校名稱:</td>
      <td><input type="text" name="schoolname"></td>
    </tr>
    <tr>
      <td>科系:</td>
      <td><input type="text" name="department"></td>
    </tr>
    <tr>
      <td>就學狀態:</td>
      <td>
        <input type="radio" name="type" value="在學中">在學中
        <input type="radio" name="type" value="畢業">畢業
      </td>
    </tr>
    <tr>
      <td>其他說明:</td>
      <td><textarea name="text" cols="50" rows="10"></textarea></td>
    </tr>
  </table>
  <div class="text-center">
    <button class="btn btn-outline-info" type="submit">確定編輯</button>
    <button class="btn btn-outline-secondary"><a href="backend.php?do=education">取消</a></button>
  </div>
</form>