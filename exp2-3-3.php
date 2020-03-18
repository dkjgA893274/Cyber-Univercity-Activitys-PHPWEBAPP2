<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>exp2-3-3</title>
</head>
<body>
    
<?php

date_default_timezone_set('Asia/tokyo');
$m = date('n');
print('<p>今は' . $m . '月、季節は');
if( $m>=3 and $m<=5 ){
    print('春です。</p>');
} elseif ( $m>=6 and $m<=8 ){
    print('夏です。</p>');
} elseif ( $m>=9 and $m<=11 ){
    print('秋です。</p>');
} else {
    print( '冬です。</p>' );
}

?>
</body>
</html>