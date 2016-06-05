<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" conatent="width=device-width, initial-scale=1" />
	<title>注册</title>
	<link rel="stylesheet" href="/sport/Public/css/bootstrap.min.css" />
	<script src="/sport/Public/js/jquery-1.11.3.min.js"></script>
	<script src="/sport/Public/js/bootstrap.min.js"></script>
	<style>
		body {
		  padding-top: 40px;
		  padding-bottom: 40px;
		  background-color: #eee;
		}	
		.form-signin {
		  max-width: 330px;
		  padding: 15px;
		  margin: 0 auto;
		}
		.form-signin .form-signin-heading,
		.form-signin .checkbox {
		  margin-bottom: 10px;
		}
		.form-signin .checkbox {
		  font-weight: normal;
		}
		.form-signin .form-control {
		  position: relative;
		  height: auto;
		  -webkit-box-sizing: border-box;
		     -moz-box-sizing: border-box;
		          box-sizing: border-box;
		  padding: 10px;
		  font-size: 16px;
		}
		.form-signin .form-control:focus {
		  z-index: 2;
		}
		.form-signin input[type="email"] {
		  margin-bottom: -1px;
		  border-bottom-right-radius: 0;
		  border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
		  margin-bottom: 10px;
		  border-top-left-radius: 0;
		  border-top-right-radius: 0;
		}
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button{
		    -webkit-appearance: none !important;
		    margin: 0; 
		}
		input[type="number"]{-moz-appearance:textfield;}
	</style>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Project name</a>
				</div>
				<div class="navbar-collapse collapse" id="navbar">
					<ul class="nav navbar-nav">
						<li>
							<a href="/sport/index.php/Home">主页</a>
						</li>
						<li>
							<a href="#">排行</a>
						</li>
						<li>
							<a href="#">活动</a>
						</li>
					</ul>
					<div class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" placeholder="Search" class="form-control">
						</div>
						<button class="btn btn-primary" type="submit">Submit</button>
					</div>
					<ul class="nav navbar-nav navbar-right"">
						<li href="#">
							<a href="/sport/index.php/Home/Login/login">登陆</a>
						</li>
						<li href="#" class="active">
							<a href="/sport/index.php/Home/Register/register">注册</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div class="container">
		<form action="/sport/index.php/Home/Register/do_register" class="form-signin" method="post">
			<h2 class="form-signin-heading text-center">
				注册
			</h2>
			<label for="inputStuNum">学号：</label>
			<input type="number" name="inputStuNum" id="inputStuNum" class="form-control" placeholder="student number" required="true" autofocus="true" />
			<label for="inputStuName">姓名：</label>
			<input type="text" id="inputStuName" name="inputStuName"   class="form-control" placeholder="student name" required="true" />
			<label for="inputPassword">密码：</label>
			<input type="password" id="inputPassword" name="inputPassword"  class="form-control" placeholder="password" required="true" />
			<label for="inputConfirm">确认密码：</label>
			<input type="password" id="inputConfirm" name="inputConfirm" class="form-control" placeholder="confirm password" required="true" />
			<label for="inputCollege">学院：</label>
			<input type="text" id="inputcollege" name="inputCollege" class="form-control" placeholder="college" required="true" />
			<div class="radio">
				<label>
					<input type="radio" name="optionsRadio" id="optionsRadio1" value="male"> 男
				</label>
				<label>
					<input type="radio" name="optionsRadio" id="optionsRadio2" value="female"> 女
				</label>
			</div>
			<!-- <div class="checkbox">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div> -->

			<button class="btn btn-lg btn-primary btn-block">注册</button>
		</form>
	</div>
</body>
</html>