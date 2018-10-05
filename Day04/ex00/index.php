<?php
    session_start();
    if ($_GET["submit"] == 'OK')
    {
        if ($_GET['login'])
            $_SESSION["login"] = $_GET["login"];

        if ($_GET['passwd'])
            $_SESSION["passwd"] = $_GET["passwd"];
    }
    $login = '';
    $password = '';

    if ($_SESSION['login'])
        $login = $_SESSION['login'];
    if ($_SESSION['passwd'])
        $password = $_SESSION['passwd'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session</title>
</head>
<body>

    <h1>Please log in:</h1>

    <form action="" method="GET">
        Login: <input type="text" name="login" placeholder="Login" value="<?= $login ?>">
        <br>
        Password: <input type="password" name="passwd" placeholder="Password" value="<?= $password ?>">
        <br>
        <button type="submit" name="submit" value="OK">Submit</button>
    </form>

</body>
</html>