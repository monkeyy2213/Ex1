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