<!DOCTYPE html><html lang="ru">
  <head>
     <meta charset="UTF-8"> 
     <title>Домашнее задание № 1(дополнительое)</title>
  </head>
  <body>
<h1>Вариант выполнения задания с передачей числа через адресную строку</h1>
<form action="index.php" method="get" enctype="multipart/form-data">	
	<p><input class="input" type="text" name="number" placeholder="Введите число">		
		<input class="submit" type="submit" value="отправить"></p>
</form>
<?php
$x = $_GET['number'];
if (isset($_GET['number']) && is_numeric($_GET['number'])) {
 	$a = 1;
	$b = 1;
	if ($a > $x) {
		echo 'Задуманное число НЕ входит в числовой ряд';
	} 
	else {
		if ($a == $x) {
			echo 'Задуманное число входит в числовой ряд';
		}
		else {
			$c = $a;
			$a = $a + $b;
			$b = $c;
			//echo "$a, $b, $c";
		}
	}
} else {
	echo "Вы ввели не число";
}

	

?>



</body>
</html>