<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	
</head>
<body>
	<form action="/flash" method="post">
		用户名:<input type="text" name="username"><br>
		密&nbsp;&nbsp;&nbsp;&nbsp;码:<input type="password" name="password"><br>
		{{csrf_field()}}
		<input type="submit" value="登录">
	</form>
</body>
</html>