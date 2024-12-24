<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registrationform.css">
    <title>Авоська</title>
</head>
<body>
    <div class="wrapper">
    <div class="login_box">
      <a class="Login_title">Регистрация</a>
      
      <form action="register.php" class="login_box_forms" method="post">
        <div class="login_box_forms_email">
            <a class="login_box_forms_email_text">Логин</a>
            <input class="login_box_forms_email_input" placeholder="Логин" name="login"></input>
          </div>
        <div class="login_box_forms_email">
          <a class="login_box_forms_email_text">Почта</a>
          <input class="login_box_forms_email_input" placeholder="Почта" name="email"></input>
        </div>
        <div class="login_box_forms_password">
            <a class="login_box_forms_password_text">Пароль</a>
          <input class="login_box_forms_password_input" placeholder="Пароль" name="pass"></input>
        </div>
        <div class="login_box_forms_password">
            <a class="login_box_forms_password_text">Повторите пароль</a>
          <input class="login_box_forms_password_input" placeholder="Повторите пароль"name="repeatpass"></input>
        </div>
      <button class="login_button">
      <a class="login_button_text">Регистрация</a>
      </button>
      </form>
      <div class="forgot_pass">
        <a class="forgot_pass_text" href="loginform.php">Логин</a>
      </div>
    </div>
    </div>
</body>
</html>