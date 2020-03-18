<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>exp3-3-4</title> 
</head>
<body>
    
<?php
    $level = array('凶','吉','中吉','大吉'); 
    $naiyo = array('大吉'=>'最高でしょう。',
                   '中吉'=>'良いでしょう。',
    	           '吉'=>'まぁまぁでしょう。',
                   '凶'=>'頑張りましょう。');
    $var = mt_rand(0,3);
    print('<p>おみくじ結果は' . $level[$var] . 'です。</p>');
    print('<p>今日は' . $naiyo[$level[$var]] );
    print('<p><a href="exp3-3-4.php">もう一度</a></p>');
?>
</body>
</html>