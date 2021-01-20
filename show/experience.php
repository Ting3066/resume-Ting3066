<form action="api/add_experience.php" method="post">
  <table>
    <tr>
      <td>公司名稱:</td>
      <td><input type="text" name="companyname"></td>
    </tr>
    <tr>
      <td>職位:</td>
      <td><input type="text" name="job"></td>
    </tr>
    <tr>
      <td>就業狀態:</td>
      <td>
        <input type="radio" name="type" value="在職">在職
        <input type="radio" name="type" value="離職">離職
      </td>
    </tr>
    <tr>
      <td>職務說明:</td>
      <td><textarea name="text" cols="50" rows="10"></textarea></td>
    </tr>
  </table>
  <div class="text-center">
    <button class="btn btn-outline-info" type="submit">確定編輯</button>
    <button class="btn btn-outline-secondary"><a href="backend.php?do=experience">取消</a></button>
  </div>
</form>