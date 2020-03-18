<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>exp4-4-1</title> 
</head>
<body>
<?PHP
    $pstnC =htmlspecialchars($_POST['postnum'] ,ENT_QUOTES,'UTF-8');
    $addC  =htmlspecialchars($_POST['address'] ,ENT_QUOTES,'UTF-8');
    $telnC =htmlspecialchars($_POST['telnum']  ,ENT_QUOTES,'UTF-8');
    $pswdC =htmlspecialchars($_POST['password'],ENT_QUOTES,'UTF-8');
print('
<form action="exp4-4-5.php" method="post">
<p>下記の内容でよろしければ「確認」をクリックしてください。</p>
<table border="1">
    <tr>
        <td>郵便番号</td><td>' . $pstnC . '</td>
    </tr>
    <tr>
        <td>住所</td><td>' . $addC . '</td>
    </tr>
    <tr>
        <td>電話番号</td><td>' . $telnC . '</td>
    </tr>
</table>
</form>'
);
?>
</body>
</html> 