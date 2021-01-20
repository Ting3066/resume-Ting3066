<form action="api/add_require.php" method="post">
  <table>
    <tr>
      <td>希望性質:</td>
      <td>
        <input type="radio" name="type" value="全職工作">全職工作
        <input type="radio" name="type" value="兼職工作">兼職工作
      </td>
    </tr>
    <tr>
      <td>上班時段:</td>
      <td>
        <input type="radio" name="time" value="日班">日班
        <input type="radio" name="time" value="夜班">夜班
      </td>
    </tr>
    <tr>
      <td>希望地點:</td>
      <td><input type="text" name="location"></td>
    </tr>
    <tr>
      <td>希望職稱:</td>
      <td><input type="text" name="title"></td>
    </tr>
  </table>
  <div class="text-center">
    <button class="btn btn-outline-info" type="submit">確定編輯</button>
    <button class="btn btn-outline-secondary"><a href="backend.php?do=require">取消</a></button>
  </div>
</form>