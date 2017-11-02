<!-- файл-шаблон, який містить загальну розмітку для всіх сторінок -->
<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= SITE_URL ?>/css/style.css">
    <title>MVC в PHP</title>
</head>

<body>
    <?php require_once("cgi/views/view_".$view.".php"); ?>
</body>

</html>