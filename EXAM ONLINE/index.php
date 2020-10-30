<?php
ob_start();
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
	header('Location: tracnghiem.php');
}
ob_flush();
?>
<!DOCTYPE html>
<html>
<head>
	<script>
		function isNumeric (evt) {
			var theEvent = evt || window.event;
			var key = theEvent.keyCode || theEvent.which;
			key = String.fromCharCode (key);
			var regex = /[0-9]|\./;
			if ( !regex.test(key) ) {
				theEvent.returnValue = false;
				if(theEvent.preventDefault) theEvent.preventDefault();
			}
		}
	</script>
	<style type="text/css">
	#bg{position:fixed;top:0;left:0;width:100%;height:100%;z-index:-1;background-color: rgba(255, 255 255, 255);}</style>
	<title>Đăng nhập - UD CNTT NC</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="bg"></div>
	<div id="main">
		<div id="login">
			<h2>THI TRẮC NGHIỆM</h2>
			<form action="" method="post">
				<br>
				<input id="name" name="xd_mssv" maxlength="11"  placeholder="Tài khoản" type="text">
				<input id="password" name="xd_matkhau" placeholder="Mật khẩu" type="password"><br>
				<input name="submit" type="submit" value=" ĐĂNG NHẬP ">
				<span><?php ob_start(); echo $error; ob_flush(); ?></span>
			</form>
		</div>
	</div>
</body>
</html>