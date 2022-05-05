<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$db = new PDO('mysql:host=db;dbname=template;', 'root', 'root');
var_dump($db);
phpinfo();
?>
</body>
</html>