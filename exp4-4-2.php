<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>exp4-4-2</title> 
</head>
<body>
<?PHP
    $pstnS =htmlspecialchars($_POST['postnum'] ,ENT_QUOTES,'UTF-8');
    $addS  =htmlspecialchars($_POST['address'] ,ENT_QUOTES,'UTF-8');
    $telnS =htmlspecialchars($_POST['telnum']  ,ENT_QUOTES,'UTF-8');
    $pswdS =htmlspecialchars($_POST['password'],ENT_QUOTES,'UTF-8');

    //郵便番号の確認
    $tmp = mb_convert_kana($pstnS, 'n', 'UTF-8');
    if(preg_match('/\A\d{7}\z/', $tmp))
    {
        $pstnS = $tmp;
    }else{
        $pstnS = '<font color = "#ff0000">ハイフンなし7桁の数値ではありません。</font><br>' . $tmp;
    }
    print('
    <form action = "exp4-4-5.php" metohd="post">
    <p>下記の内容を確認してください。</p>
    <table border ="1">
    	<tr>
        	<td>郵便番号</td><td>' . $pstnS . '</td>
        </tr>
    	<tr>
        	<td>住所</td><td>' . $addS . '</td>
        </tr>
        <tr>
        	<td>電話番号</td><td>' . $telnS . '</td>
        </tr>
        </table></br>
        </form>'
    );
?>
</body>
</html>