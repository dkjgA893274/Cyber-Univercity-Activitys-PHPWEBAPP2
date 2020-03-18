<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>exp3-3-2</title> 
</head>
<body>
    
<?php
    $x[0] = '0'; $x[1] = '1'; $x[2] = '2'; $x[3] = '3';
    $x[4] = '4'; $x[5] = '5'; $x[6] = '6'; $x[7] = '7';
    $x[8] = '8'; $x[9] = '9'; $x[10] = 'A'; $x[11] = 'B';
    $x[12] = 'C'; $x[13] = 'D'; $x[14] = 'E'; $x[15] = 'F';
    $d = 500;
    $c = 0;
	print('<p>10進数の' . $d . ' は16進数で示すと ');
    while( $d > 0 ){
        $amari = $d % 16;
        $s[] = $x[$amari];
        $d = ($d - $amari) / 16;
        $c++;//$sのカウンタ
    }
    
    for( $i = $c-1; $i>=0; $i-- ){
        print($s[$i]);
    }
    
    print('です。</p>');
    
?>
</body>
</html>