<?php

   // session_start();



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_SESSION['login_at'])):  ?>
        <p><a href="session_logout.php">session_logout</a></p>
    <?php else: ?>
        <p><a href="session_login.php">session_login</a></p>
    <?php endif; ?>

    <?php if(isset($_SESSION['login_at'])): ?>
        <p>Время входа: <?= $_SESSION['login_at'] ?> </p>
        <p><?= time() - $_SESSION['login_at'] ?> секунд назад.</p>
    <?php else: ?>
        <p>Вход не произведен</p>
    <?php endif; ?>

</body>
</html>