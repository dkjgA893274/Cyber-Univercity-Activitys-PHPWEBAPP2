<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>簡単日記・予定帳</title> 
</head>
<body>
<h1>簡単日記・予定帳</h1>
<?PHP
//現在の年月の取得
$thisYear  = date('Y');
$thisMonth = date('m');
    
if(isset($_POST['year']))
{
    //選択された年月の取得
    $year = intval($_POST['year']);
    $month = intval($_POST['month']);
} else 
{
    //現在の年月の取得
    $year=$thisYear;
    $month=$thisMonth;
}
//年月選択メニューの表示
$me =$_SERVER['SCRIPT_NAME'];
print("<form method =\"POST\" action =\"$me\">");
//年の選択メニュー
print('<select name="year">');
for($i = $thisYear-10; $i<=$thisYear+3; $i++)
{
    print('<option');
    if($i == $year)
    {
        print(' selected');
    }
    print(">$i</option>");
}
print('</select>年');
//月の選択メニュー
print('<select name="month">');
for($i=1; $i<=12; $i++)
{
    print('<option');
    if($i == $month)
    {
        print(' selected');
    }
    print(">$i</option>");
}
print('</select>月'); 
print('<input type = "submit" value = "カレンダーを表示"　name = "submit1">');
print('</form>');
?>
<!-- カレンダーを表示 -->
<table border="1">
<tr>
    <th>日</th>
    <th>月</th>
    <th>火</th>
    <th>水</th>
    <th>木</th>
    <th>金</th>
    <th>土</th>
</tr>
<tr>
<?php 
//1日の曜日まで移動
$first = date('w', mktime(0, 0, 0, $month, 1, $year));
for($i=1; $i<=$first; $i++)
{
    print('<td> </td>');
}

$day=1;
while(checkdate($month,$day,$year))
{
    //日にちを表示
    $link = 'mydiary.php?ymd=%04d%02d%02d';
    print("<td><a href=\"" . sprintf($link, $year,$month,$day) . "\">{$day}</a></td>");    
    //土曜日の場合
    if(date('w', mktime(0, 0, 0, $month, $day, $year)) == 6)
    {
        //週を終了
        print('</tr>');
        //次週がある時は行を追加
        if(checkdate($month,$day+1,$year))
        {
            print('<tr>');
        }
    }
    //日付を一つ進める
    $day++;
}
//最終の土曜日まで移動
$last = date('w', mktime(0, 0, 0, $month+1, 0, $year));
for($i=1; $i<7-$last; $i++)
{
    print('<td> </td>');
}
?>
</tr>
</table>
</body>
</html>