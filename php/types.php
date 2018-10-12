<! DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Начинаем работу с PHP</title>
</head>
<body>
<?php
$filestream = fopen('index.html', 'r');
$data = ['PHP', 1, 2.3, TRUE, NULL, array(), new directory, $filestream];
foreach($data as $type) {
	var_dump($type);
	echo '<br>';
}
fclose($filestream);
echo gettype(filestream);
?>
</body>
</html>
