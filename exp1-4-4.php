<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title> exp1-4-4</title>
</head>
<body>
<?php
$a = 4;
$b = 1;
define('name','エイプリルフール');
$date=sprintf('%02d月%02d日は%sです。<br>',$a,$b,name);
print($date);
?>
</body>
</html>