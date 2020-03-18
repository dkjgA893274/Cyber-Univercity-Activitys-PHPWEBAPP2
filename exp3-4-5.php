<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>exp3-4-5</title> 
</head>
<body>
<?php
    $info = array('日' => '休み'         ,
                  '月' => '会議１'        ,
                  '火' => '会議２'        ,
                  '水' => '開発打ち合わせ' ,
                  '木' => '出張'          ,
                  '金' => 'セミナー'      ,
                  '土' => '半日勤務'
                 );
    
    $cp1 = $info;//代入
    $cp2 = &$info;//参照渡し
        
    $info['土'] = '有給休暇';
    
    echo 'cp1<br>';
    echo '<pre>';
    print_r($cp1);
    echo '</pre>';
    
    echo 'cp2<br>';
    echo '<pre>';
    print_r($cp2);
    echo '</pre>';
?>

</body>
</html>