<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>電子会議システム</title> 
	</head>
	<body>
		<?php
		session_start();              // セッションの開始
		mb_internal_encoding('UTF-8');// 文字コードをUTF-8にする
		$id = $_SESSION["id"];        // 削除データの主キーを取得
	//データベースに接続
		$database = 'student_bbs';    //データベース名の設定
		$con = mysqli_connect('localhost','student','student999')
			or die ('接続に失敗しました');
		mysqli_select_db($con,$database)
			or die($database . 'に接続できません');
		mysqli_query($con, 'SET NAMES UTF8MB4') //文字コードをUTF-8に設定
			or die('文字コードの設定に失敗しました');
	//削除するデータの取得
		$sql   = "SELECT * FROM discussion WHERE id='$id'";
		$query = mysqli_query($con,$sql) or die('fail');
		$data  = mysqli_fetch_array($query);
	//削除用のパスワードを確認
		$passwd = htmlspecialchars($_POST["passwd"], ENT_QUOTES, "UTF-8");
		if($data["passwd"] !=$passwd){
			exit('編集用のパスワードが違います。ブラウザの戻るボタンをクリックして前画面に戻り、
					パスワードを正しく入力してください。');
		}
	//データベースを切断
		mysqli_close($con);
		?>
		<!--　処理内容の表示 --> 
		<p>削除確認画面</p>
				<form method="POST" action="delete-submit.php">
					<table border="1">
						<tr>
							<td>名前</td>
							<td><?php echo $data["name"]; ?></td>
						</tr>
						<tr>
							<td>メッセージ</td>
							<td><?php echo nl2br($data["message"]); ?></td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" value="削除する">
							</td>
						</tr>
					</table>
				</form>
	</body>
</html>