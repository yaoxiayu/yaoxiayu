<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
</head>
<body>
	<form action="/login" method="post">
		用户名:<input type="text" name="username"><br>
		密&nbsp;&nbsp;&nbsp;&nbsp;码:<input type="password" name="password"><br>
		手机号:<input type="text" name="phone"><br>
		{{csrf_field()}}
		<input type="submit" value="注册">
	</form>
</body>
</html>