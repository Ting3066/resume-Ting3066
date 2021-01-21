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
      <td>其他說明:</td>
      <td><input type="text" name="text[]"></td>
    </tr>
    <tr class="text-center">
      <td colspan="2"><button type="button" class="btn btn-info" onclick="more(this)">新增欄位</button></td>
    </tr>
  </table>
  <div class="text-center">
    <button class="btn btn-outline-info" type="submit">確定編輯</button>
    <button class="btn btn-outline-secondary"><a href="backend.php?do=education">取消</a></button>
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