<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  body{
    width: 100vw;
    height: 100vh;
    background: slategrey;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }

  .login{
    width: 400px;
    height: 400px;
    background: snow;
    border-radius: 10px;
    box-shadow: 0 0 9px 0px #6b6b6b;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #777;
  }

  .login div, .login h1{
    margin-bottom: 40px;
  }

  .login input{
    border-radius: 5px;
    margin-left: 5px;
    border: 1px solid #777;
    height: 25px;
  }

  .login button{
    background: #ffd45c;
    border: none;
    border-radius: 5px;
    padding: 5px;
    width: 50px;
    cursor: pointer;
  }
  .login button:nth-of-type(2){
    background: #ececec;
    border: none;
    border-radius: 5px;
    padding: 5px;
    width: 50px;
  }

  </style>
</head>
<body>
<?php
if(isset($_GET['err'])){
?>
<div style="color:white">帳號或密碼錯誤!</div>
<?php
}
?>
  <form action="../api/check_login.php" method="post">
    <div class="login">
      <h1>管理登入</h1>
      <div>帳號:<input type="text" name="acc" required></div>
      <div>密碼:<input type="password" name="pw" required></div>
      <div>
        <button type="submit">送出</button>
        <button type="reset">重置</button>
      </div>
    </div>
  </form>
</body>
</html>