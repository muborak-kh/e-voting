<html lang="en">
<head>
  <?
    //require_once 'includes/config.php';
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Voting - Online Voting System</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
  <link rel="stylesheet" type="text/css" href="css/lf-style.css">
  <link rel="stylesheet" type="text/css" href="css/form-theme.css">
</head>
<body>
<div class="form-body">
  <div class="website-logo">
    <a href="index.html">
      <div class="logo">
        <img class="logo-size" src="images/logo-light.svg" alt="">
      </div>
    </a>
  </div>
  <div class="row">
    <div class="img-holder">
      <div class="bg"></div>
      <div class="info-holder">

      </div>
    </div>
    <div class="form-holder">
      <div class="form-content">
        <div class="form-items">
          <h3>E-Voting</h3>
          <p style="font-weight: 50">Система онлайн-голосований, основанная на технологии блокчейн.</p>
          <div class="page-links">
            <a href="login2.html" class="active">Вход</a><a href="register2.html">Регистрация</a>
          </div>
          <form method="post" action="login.php">
            <input class="form-control" type="text" name="username" placeholder="E-mail Address" required="">
            <input class="form-control" type="password" name="password" placeholder="Password" required="">
            <input type="checkbox" id="chk1"><label for="chk1">Запомни меня</label>
            <div class="form-button">
              <button id="submit" type="submit" name="user-login" class="ibtn">Войти</button> <a href="forget2.html">Забыли пароль?</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body></html>
