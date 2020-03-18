<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>exp3-1-1 1.0を'1.0'にして</title> 
</head>
<body>
    
<?php
$array = array('1.0'=>'abc','true'=>'ABC');
echo $array['true'] . 
    
    $array[1.0]
    
    ;
?>

</body>
</html>