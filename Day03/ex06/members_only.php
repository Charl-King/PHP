#!/usr/bin/php
<?php
    header("Content-Type: text/html");
    $str = "Test:code";
    $str = base64_encode($str);
    echo $str."\n";
    $str = base64_decode($str);
    echo $str."\n";
    print_r($_SERVER);
?>