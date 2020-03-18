<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>exp3-3-3</title> 
</head>
<body>
    
<?php
    $img = array('1.png','2.png','3.png','4.png','5.png','6.png'); 
    $var1 = mt_rand(1,6);
    $var2 = mt_rand(1,6);
    print('<a href="exp3-3-3.php">
    			<img src="image/' . $img[$var1-1] . '"></a>');
    print('<a href="exp3-3-3.php">
    			<img src="image/' . $img[$var2-1] . '"></a>');
?>
</body>
</html>