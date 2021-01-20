<form action="api/add_skill.php" method="post">
  <table>
    <tr>
      <td>技能名稱:</td>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <td>類別:</td>
      <td>
        <select name="type">
          <option value="1">前端</option>
          <option value="2">後端</option>
          <option value="3">軟體工具</option>
          <option value="4">版本控制</option>
        </select>
      </td>
    </tr>
  </table>
  <div class="text-center">
    <button class="btn btn-outline-info" type="submit">確定編輯</button>
    <button class="btn btn-outline-secondary"><a href="backend.php?do=skill">取消</a></button>
  </div>
</form>