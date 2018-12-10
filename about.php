<?php
$name = 'Максим';
$age = 29;
$email = 'maaax128@list.ru';
$city = 'Пермь';
$about = 'студент Нетологии';
?>


<!DOCTYPE html><html lang="ru">
  <head>
     <meta charset="UTF-8"> 
     <title>Домашнее задание № 1</title>
  </head>
  <body>
<?php
echo '<h1>Страница пользователя Максим</h1>';
echo "<p>Имя $name</p>";
echo "<p>Возраст $age </p>";
echo "<p>Адрес электронной почты $email </p>";
echo "<p>Город $city </p>";
echo "<p>О себе $about</p>";
  ?>
</body>
</html>