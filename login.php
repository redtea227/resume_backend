<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="js/jquery-1.9.1.min.js"></script>
  <style>
    body{
      height: 100vh;
      box-sizing: border-box;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      background: url("img/bg-7.jpg") no-repeat;
      background-size:cover;
    }
  </style>
</head>
<body>
  <fieldset>
    <legend>登入頁面</legend>
    <form action="api/login.php" method="post">
      <p>
      <label for="acc">帳號:</label>
      <input type="text" name="acc" id="acc">
      </p>
      <p>
      <label for="pw">密碼:</label>
      <input type="password" name="pw" id="pw">
      </p>
      <input type="submit" value="登入">
      <input type="reset" value="清除">
      <input type="button" value="返回" style="float:right" onclick="location.href='index.php'">
    </form>
  </fieldset>
</body>
</html>