<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>404 ko tìm thấy</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500&display=swap" rel="stylesheet">
	<style>
		*{-webkit-box-sizing:border-box;box-sizing:border-box}body{padding:0;margin:0}#notfound{position:relative;height:100vh}#notfound .notfound{position:absolute;left:50%;top:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.notfound{max-width:920px;width:100%;line-height:1.4;text-align:center;padding-left:15px;padding-right:15px}.notfound .notfound-404{position:absolute;height:100px;top:0;left:50%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%);z-index:-1}.notfound .notfound-404 h1{font-family:'Montserrat';color:#ececec;font-weight:900;font-size:276px;margin:0;position:absolute;left:50%;top:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.notfound h2{font-family:'Montserrat';font-size:46px;color:#000;font-weight:900;text-transform:uppercase;margin:0}.notfound p{font-family:'Montserrat';font-size:16px;color:#000;font-weight:400;text-transform:uppercase;margin-top:15px}.notfound a{font-family:'Montserrat';font-size:14px;text-decoration:none;text-transform:uppercase;background: #f1af51;display:inline-block;padding:16px 38px;border:2px solid transparent;border-radius:40px;color:#fff;font-weight:400;-webkit-transition:.2s all;transition:.2s all;}.notfound a:hover{background-color:#fff;border-color: #f1af51;color: #f1af51;}@media  only screen and (max-width:480px){.notfound .notfound-404 h1{font-size:162px}.notfound h2{font-size:26px}}
	</style>
</head>
<body>
	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>404</h1>
			</div>
			<h2>Xin lỗi, không tìm thấy trang</h2>
			<p>Trang bạn tìm kiếm có vẻ đã bị xoá, đổi tên hoặc không tồn tại.</p>
			<a href="{{URL::to('/')}}">Về trang chủ</a>
		</div>
	</div>
</body>
</html>