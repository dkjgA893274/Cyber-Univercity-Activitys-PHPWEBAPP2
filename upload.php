<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>入力内容</title> 
</head>
<body>
<p>
<?PHP
$upfile = $_FILES['uploadfile'];
if(is_uploaded_file($upfile['tmp_name']))
	{
  		if(move_uploaded_file($upfile['tmp_name'],'./upfiles/' . $upfile['name']))
 		 {
    		chmod('./upfiles/' . $upfile['name'], 0644);
    		echo $upfile['name'] . 'アップロードしました。';
 				 } else 
 		 		   {
    				echo 'ファイルがアップロードできません。';
 				   }
    }else
	{
 		echo 'ファイルが選択されていません。';
	}
?>
</p>
</body>
</html>