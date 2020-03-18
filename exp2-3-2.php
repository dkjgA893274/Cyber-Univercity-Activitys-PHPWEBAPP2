<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>exp2-3-2</title>
</head>
<body>
    
<?php
    
$a = 123;
$b = $a%2;

print($a . 'は');
switch($b){
    case 0:
    	print('偶数です。<br>');
    	break;
    case 1:
    	print('奇数です。<br>');
        break;
}
    
?>
    
</body>
</html>