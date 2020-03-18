<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>exp3-4-1_悪例</title> 
</head>
<body>
<pre>
<?php
    $week = array('日','月','火','水','木','金','土'); 
    $sche = array('休み' ,'会議１' ,
                  '会議２' ,'開発打ち合わせ' ,
                  '出張' ,'セミナー' ,'半日勤務' );
    $i = 0;
	foreach( $week as $a ){
        
        $info = array($a=>$sche[$i]);
        $i++;
    }
    print_r($info)
?>
</per>
</body>
</html>