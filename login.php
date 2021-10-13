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
    body{
      height: 100vh;
      background: url("img/bg-4.jpg") no-repeat center center;
      background-size: cover;
    }
    div.col-md-4.offset-md-4{
      margin-top: 10%;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="login-form bg-light mt-4 p-4">
          <form action="api/login.php" method="post" class="row g-3">
            <h4>Welcome Back</h4>
            <div class="col-12">
              <label for="acc">Username</label>
              <input type="text" name="acc" value="guest" class="form-control" placeholder="Username" id="acc">
            </div>
            <div class="col-12">
              <label for="pw">Password</label>
              <input type="password" name="pw" value="952759" class="form-control" placeholder="Password" id="pw">
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="rememberMe">
                <label class="form-check-label" for="rememberMe"> Remember me</label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Login</button>
              <input type="button" class="btn btn-secondary float-end" value="Back" onclick="location.href='index.php'">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>