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
      <td>任職時間:</td>
      <td>
        <input type="text" name="time">
      </td>
    </tr>
    <tr>
      <td>職務說明:</td>
      <td><input type="text" name="text[]"></td>
    </tr>
    <tr class="text-center">
      <td colspan="2"><button type="button" class="btn btn-info" onclick="more(this)">新增欄位</button></td>
    </tr>
  </table>
  <div class="text-center">
    <button class="btn btn-outline-info" type="submit">確定編輯</button>
    <button class="btn btn-outline-secondary"><a href="backend.php?do=experience">取消</a></button>
  </div>
</form>

<script>
function more(item){
  $(item).parents("tr").before(`
    <tr>
      <td></td>
      <td><input type="text" name="text[]"></td>
    </tr>
  `);
  
  
}
</script>