<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title> exp1-4-2</title>
</head>
<body>
<?php
$a = 10;
$tmp=&$a;
print('$a=' . $a . ' ');
$a = 30;
$b = 20+$tmp;
print('$tmp=' . $tmp . ' ');
print('$b=' . $b);
?>
</body>
</html>