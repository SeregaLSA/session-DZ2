<?php

    session_start();
    //$_SESSION['login_at'] = time();

    if(isset($_SESSION['login_at'])){
        echo 'Сессия существует';
    }
    else{
        echo 'Сессии пока нет, но сейчас мы её запустим';
        $_SESSION['login_at'] = time();
    }
    var_dump($_SESSION['login_at']);


    require "session.php";
?>