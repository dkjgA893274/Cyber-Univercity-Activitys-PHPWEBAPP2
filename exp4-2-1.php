<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>exp4-2-1</title> 
</head>
<body>
<?PHP
    $message1 = '"こんにちは!"<br>';
    $message2 = 'お元気ですか';
    echo htmlspecialchars($message1, ENT_QUOTES, 'UTF-8') . $message2;
?>
</body>
</html>