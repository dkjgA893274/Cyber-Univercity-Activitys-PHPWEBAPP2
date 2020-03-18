<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>電子会議システム</title> 
	</head>
	<body>
		<?php
	// セッションの開始
		session_start();
		if(empty($_SESSION)){exit;}
	//データベースに接続
		$database = 'student_bbs'; //データベース名の設定
		$con = mysqli_connect('localhost', 'student', 'student999')
			or die ('接続に失敗しました');
		mysqli_select_db($con,$database)
			or die($database . 'に接続できません');
		mysqli_query($con, 'SET NAMES UTF8MB4') //文字コードをUTF-8に設定
			or die('文字コードの設定に失敗しました');

		$id =  $_SESSION["id"]; // 削除データの主キーを取得
	// データを削除
		$sql = "DELETE FROM discussion WHERE id='$id'";
		$query = mysqli_query($con, $sql) or die('データを削除できませんでした');
		$message = 'データを削除しました<br>';

		// セッションデータの破棄
		$_SESSION = array();
		session_destroy();
		?>
		<!-- 処理結果の表示 -->
		<p>削除完了画面</p>
		<p><?php echo $message; ?></p>
		<p><a href="bbs_top.php">トップページ</a></p>
	</body>
</html>