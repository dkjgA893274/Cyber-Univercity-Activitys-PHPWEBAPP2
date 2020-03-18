<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>正規表現</title> 
</head>
<body>
    
<?php
	$string = array('「PHP入門」','「入門PHP」',
                 '「Unix入門第一回」','「サーバー構築入門第10回」');
	foreach( $string as $work ){
			if(preg_match('/^PHP/', $work))  echo $work . 'はPHPから始まる文字列です<br>';
			if(preg_match('/PHP$/', $work))  echo $work . 'はPHPから終わる文字列です<br>';
			if(preg_match('/[a-z]/', $work)) echo $work . 'はa〜zのいずれかを含みます<br>';
			if(preg_match('/[123]/', $work)) echo $work . 'は1,2,3のいずれかを含みます<br>';
			if(preg_match('/ <font face="courier new,courier">\</font>d/', $work)) 
			                                 echo $work . 'は数字を含みます<br>';

    }
?>
</body>
</html>