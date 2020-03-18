<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>exp4-4-5</title> 
</head>
<body>
下記の内容で登録しました。
        <table border ="1">
    	<tr>
        	<td>郵便番号</td>
        		<td><?php print(htmlspecialchars(
           		$_POST['postnumS'], ENT_QUOTES, 'UTF-8')); ?>
           	 	</td>
        </tr>
    	<tr>
        	<td>住所</td>
        		<td><?php print(htmlspecialchars(
           		$_POST['addressS'], ENT_QUOTES, 'UTF-8')); ?>
           	 	</td>
        </tr>
    	<tr>
        	<td>電話番号</td>
        		<td><?php print(htmlspecialchars(
           		$_POST['telnumS'], ENT_QUOTES, 'UTF-8')); ?>
           	 	</td>
        </tr>
    </table>
</body>
</html>