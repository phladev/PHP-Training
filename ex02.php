<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM</title>
</head>
<body>
    <?php 
        $name = isset ($_GET["name"])?$_GET["name"]:"[não informado]";
        $year = isset ($_GET["year"])?$_GET["year"]:0;
        $sex = isset ($_GET["sex"])?$_GET["sex"]:"[não informado]";
        $age = date("Y") - $year;
        echo "$name é $sex, nasceu em $year e tem $age anos!"
    ?><br>
    <a href="ex02.html">Voltar</a>
</body>
</html>