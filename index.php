<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet"  type="text/css">
    <title>Document1</title>
</head>
<body>
    <header>
        <h1>Разработка Веб-приложений</h1>
        <?php
            print "это вывел php!";
            $test = $_POST["test"];
            print "HI! ".$test;
            
            $mysqli = new mysqli("localhost", "root", "", "users");
            $sql = "INSERT INTO users(login, password) VALUES ('user1','password1')";
            $result = mysql_query("SELECT 'Используйте вместо него модуль mysqli.' AS _msg FROM DUAL", $mysql);
        ?>
    </header>
    <nav class="top-border">
        <ol>
            <li>
                <a href="reg.html">Регистрация</a>
            </li>
            <li>
                <a href="index.html">Главная</a>
            </li>
            <li>
                <a href="auth.html">Авторизация</a>
            </li>
            <li>
                <a href="hidden_page.html">Скрытая страница</a>
            </li>
        </ol>
    </nav>
    <main>
        <div>
            Пример регистрации
        </div>
        <form action="" method="post">
            <input type="text" name = "test"> <br>
            <input type="submit" value = "отправить">
        </form>
    </main>
    <footer>
        <h2>Сунцов Константин 2011</h2>
    </footer>
</body>
</html>