<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>exp3-4-4_悪例</title> 
</head>
<body>
<?php
    $week = array('日','月','火','水','木','金','土');//配列が足りない。。配列を増やす！
    $sche = array( '休み' , '会議１' , '会議２' ,
                   '開発打ち合わせ' , '出張' , 'セミナー' ,
                   '半日勤務', '研修' );
    $i = 0;
	foreach( $sche as $a ){

        $info[$week[$i]] = $a;
        $i++;
    }
    foreach( $info as $day=>$work ){

        echo $day . '・・・' . $work . '<br>'; 
    }
?>

</body>
</html>