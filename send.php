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
$company = $_POST['company'];
$imya = $_POST['imya'];
$nomer = $_POST['nomer'];

$company = htmlspecialchars($company);
$imya = htmlspecialchars($imya);
$nomer = htmlspecialchars($nomer);

$company = urldecode($company);
$imya = urldecode($imya);
$nomer = urldecode($nomer);

$company = trim($company);
$imya = trim($imya);
$nomer = trim($nomer);


if (mail("zagidmag@mail.ru",
    "Новое письмо с сайта",
    "Название компании: ".$company."\n".
    "Ваше имя: ".$imya."\n".
    "Номер телефона: ".$nomer."\n".
    "From: no-reply@mydomain.ru \r\n")
) {
    echo ('Письмо успешно отправлено');
}
else
{
    echo ('Введите все данные');
}
?>
</body>
</html>
 