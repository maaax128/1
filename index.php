<?php
if (isset($_GET['number']) && is_numeric($_GET['number'])) {
	$x = $_GET['number'];
 	$a = 1;
	$b = 1;
	while ($a <= $x) {
		if ($a == $x) {
			$text = "Задуманное число $x входит в числовой ряд";
			break;
		} else {
		$c = $a;
		$a = $a + $b;
		$b = $c;
		 		if ($a > $x) {
				$text = "Задуманное число $x НЕ входит в числовой ряд";
					}
				}
			}
} else {
	$text = 'Вы ввели не число';
}	
?>


<!DOCTYPE html>
<html lang="ru">
  <head>
     <meta charset="UTF-8"> 
     <title>Домашнее задание № 1(дополнительое)</title>
  </head>
  <body>
<h1>Вариант выполнения задания с передачей числа через адресную строку</h1>
<form action="index.php" method="get" enctype="multipart/form-data">	
	<p><input class="input" type="text" name="number" placeholder="Введите число">		
		<input class="submit" type="submit" value="отправить"></p>
<?php 
echo "$text";
?>
</form>
</body>
</html>