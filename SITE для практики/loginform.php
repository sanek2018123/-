<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginform.css">
    <title>Авоська</title>
</head>
<body>
    <div class="wrapper">
    <div class="login_box">
      <a class="Login_title">Логин</a>
        <form action="login.php" class="login_box_forms" method="post">
        <div class="login_box_forms_email">
          <a class="login_box_forms_email_text">Логин</a>
          <input class="login_box_forms_email_input" placeholder="Логин" name="login"></input>
        </div>
        <div class="login_box_forms_password">
            <a class="login_box_forms_password_text">Пароль</a>
          <input class="login_box_forms_password_input"placeholder="Пароль" name="pass"></input>
        </div>
      <button type="submit" class="login_button">
      <a class="login_button_text">Логин</a>
      </button>
</form>
      <div class="forgot_pass">
        <a class="forgot_pass_text" href="registrationform.php">Регистрация</a>
      </div>
    </div>
    </div>
</body>
</html>