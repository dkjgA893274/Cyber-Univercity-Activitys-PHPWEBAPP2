<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>入力内容</title> 
</head>
<body>
<p>下記の内容でよろしければ「確認」をクリックしてください。</p>
<form action="input4-2.php" method="post">
<table border="1">
    <tr>
        <td>学籍番号</td>
        <td><?php print(htmlspecialchars($_POST['number'],ENT_QUOTES, 'UTF-8'))?></td>
    </tr>
    <tr>
        <td>名前</td>
        <td><?php print(htmlspecialchars($_POST['name'],ENT_QUOTES, 'UTF-8'))?></td>
    </tr>
    <tr>
        <td>メールアドレス</td>
        <td><?php print(htmlspecialchars($_POST['mail'],ENT_QUOTES, 'UTF-8'))?></td>
    </tr>
    <tr>
        <td>コメント</td>
        <td><?php print(htmlspecialchars($_POST['comment'],ENT_QUOTES, 'UTF-8'))?></td>
    </tr>
</table>
<input type="submit" value="確認">
<!---ブラウザに表示させずに登録完了画面へ値を渡す-->
<input type="hidden" name="numberS" value="<?php echo $_POST['number'];?>">
<input type="hidden" name="nameS" value="<?php echo $_POST['name'];?>">
<input type="hidden" name="mailS" value="<?php echo $_POST['mail'];?>">
<input type="hidden" name="commentS" value="<?php echo $_POST['comment'];?>">
</form>
</body>
</html>