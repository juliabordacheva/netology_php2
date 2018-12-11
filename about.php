<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Знакомство с PHP</title>
    </head>
    <body>
      <h1>Знакомство с PHP</h1>
    </body>
  </html>



<?php header("Content-Type: text/html; charset=utf-8");
    $userName = 'Юлия';
    $userAge = '36';
    $mail = 'yulia@mail.ru';
    $city = 'Moscow';
    $about = 'Продавщица в Ашане';
    ?>


    <p>Имя: <strong><?= $userName ?></strong></p>
    <p>Возраст: <strong><?= $userAge ?></strong></p>
    <p>Электронная почта: <strong><?= $mail ?></strong></p>
    <p>Город: <strong><?= $city ?></strong></p>
    <p>О себе: <strong><?= $about ?></strong></p>

     </body>
  </html>
