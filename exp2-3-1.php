<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>exp2-3-1</title>
</head>
<body>
    
<?php
    
$a = 123;
$b = $a%2;

print($a . 'は');
if( $b == 0 ){
    print('偶数です。<br>');
} else {
    print('奇数です。<br>');
}
    
?>
    
</body>
</html>