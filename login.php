<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="js/jquery-1.9.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <style>
    body {
      background: url("img/bg-7.jpg") no-repeat;
      background-size: cover;
    }
  </style>
</head>

<body class="vh-100 d-flex justify-content-center align-items-center text-center">
    <div class="border border-3 border-secondary p-5 rounded">
      <form action="api/login.php" method="post">
        <div class="mx-auto mb-3">
          <label for="acc" class="form-label fs-5 text-light fw-bold">帳號</label>
          <input type="text" name="acc" class="form-control" id="acc">
        </div>
        <div class="mx-auto mb-3">
          <label for="pw" class="form-label fs-5 text-light fw-bold">密碼</label>
          <input type="text" name="pw" class="form-control" id="pw">
        </div>
        <div class="mx-auto mb-3">
          <input type="submit" class="btn btn-secondary" value="登入">
          <input type="reset" class="btn btn-secondary" value="清除">
          <input type="button" class="btn btn-secondary" value="返回" onclick="location.href='index.php'">
        </div>
      </form>
  </div>
</body>

</html>