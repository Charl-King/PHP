<?php
$value = $_GET["value"];
$name = $GET["name"];
$action = $GET["action"]

    if ($action == "set")
        setcookie($name, $value);
    if ($action == "get" && $_COOKIE[$name])
        echo $_COOKIE[$name]."\n";
    if ($action == "del")
        setcookie($name, "", time() + 86400);
?>