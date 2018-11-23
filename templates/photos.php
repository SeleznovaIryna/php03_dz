<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="templates/style.css">
    <title><?=$title?></title>
</head>
<body>
<ul class="menu">
    <li><a href="index.php">Главная</a></li>
    <li><a href="?page=contacts">Контакты</a></li>
    <li><a href="?page=content">Новости</a></li>
    <li><a href="?page=photos">Фотогалерея</a></li>
</ul>
<h1>Hello!!!</h1>
<div class="content"><?=$contents?></div>
<div class="photo">
    <?php
    for ($i=0;$i<count($photos);$i++){
        echo '<h3>'.$photos[$i]['title'].'</h3><img src="'.$photos[$i]['photo'].'" alt="">';
    }
    ?>
</div>
</body>
</html>