<html>
<head>
    <title><?=$data['title']?></title>
    <link rel="stylesheet" href="../../public/css/main.css">
</head>
<body>
<!--Тут должны выводиться данные от пользователя-->
<p><?=$data['head']?></p>
<p><?=$data['login']?></p>
<p><?=$data['email']?></p>
<!------------------------------------------------>

<h1><?=$data['title']?></h1>
<form action="" method="post">
    <input type="text" name="login" placeholder="Введите логин" autocomplete="off">
    <input type="email" name="email" placeholder="Введите email" autocomplete="off">
    <button type="submit">Добавить</button>
</form>
</body>
</html>