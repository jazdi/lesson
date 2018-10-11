<! DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Начинаем работу с PHP</title>
</head>
<body>
<?php
$days = array('Понедельник', 'Вторник', 'Среда');
foreach($days as $value) {
	echo "&bull; $value ";
}
$months = array('янв' => 'Январь', 'фев' => 'Февраль', 'мар' => 'Март');
echo '<dl>';
foreach($months as $key => $value) {
	echo "<dt>$key<dd>$value";
}
'</dl>'
?>
</body>
</html>
