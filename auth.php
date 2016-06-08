<?php
$users = array(
    'admin' => '12345',
    'user1' => 'qwerty'
);

if (isset($_POST['auth'])) {
    if (isset($_POST['login']) && isset($_POST['pass'])) {
        if (isset($users[$_POST['login']]) && $users[$_POST['login']] == $_POST['pass']) {
            if ($_POST['reMe'] == 'on') {
                setcookie('login', $_POST['login'], time() + 3600 * 24);
                setcookie('password', $_POST['pass'], time() + 3600 * 24);
            }
        }
    }
}
//print_r($_COOKIE);
?>

<html>
<head>
    <title>Cookie</title>
    <meta charset="UTF-8">
</head>
<body>
    <a href="/">Главная страница</a>
    <form method="post">
        Введите логин<input type="text" name="login" /><br>
        Введите пароль<input type="password" name="pass" /><br>
        <input type="checkbox" name="reMe"/>
        <input type="submit" name="auth" value="Войти" />
    </form>
</body>
</html>