<?php
    if ($_POST['submit'] != 'OK' || empty($_POST['login']) || empty($_POST['passwd'])) 
        echo ("ERROR\n");
    else{
        $data = @file_get_contents('./private/passwd');

        if (!file_exists("./private"))
            mkdir('./private');
        else{
            $data = unserialize($data);
        }
        if(!$data[$_POST['login']]){

            $data[$_POST['login']] = ['login'=>$_POST['login'], 'passwd'=>hash("whirlpool", str_rot13($_POST['passwd']))];
            file_put_contents('./private/passwd', serialize($data));
            echo "OK <br>".$_POST['login']." has been created";
        }

        else
            echo("ERROR <br> User already exists");     
    }
?>