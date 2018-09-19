<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>PHP入門 練習問題7</title>
</head>
<body>
<from action = "送信先" method = "post">
	名前を入力してください
	<input type = "text" name = "name">
	<input type ="submit" value ="ボタン"><br>
</from><br>
</body>
</html>
	
	[送信先]
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>送信先</title><br>
</head>

<body>
「<? = $_POST['name']?>...さん、おはようございます！」
</body>
</html>