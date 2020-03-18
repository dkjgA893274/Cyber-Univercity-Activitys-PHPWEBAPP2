<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>exp2-4-1</title>
</head>
<body>
    
<?php

$m = 1;
print('<p>' . $m . '月<br>');
$i=1;
while( $i < 32 ){
    print($i . ' ');
		if ( $m==2 and $i==28 ){
            break;
		} elseif (( $m==4 or $m==6 or $m==9 or $m==11 ) and $i == 30){
            break;
        }
    	$i++;
}
    print('</p>');

?>
</body>
</html>