<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>exp2-3-4</title>
</head>
<body>
    
<?php
$a = "名古屋";

switch($a){
    case "東京":
    case "とうきょう":
    	print("<p>Tokyo");
    	break;
    case "大阪":
    case "おおさか":
    	print("<p>Osaka");
    	break;
    default:
    	print("<p>その他");
    	break;
}
print("</p>");
    
?>
    
</body>
</html>