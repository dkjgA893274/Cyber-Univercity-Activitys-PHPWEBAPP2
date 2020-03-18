<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>for文</title>
</head>
<body>
    
<?php
    
date_default_timezone_set('Asia/tokyo');
for($i=-3; $i<=3; $i+=2 ){
    print( date('Y年m月d日' , mktime(0,0,0,$i,1,2012)) . '<br>' );
}
?>
    
</body>
</html>