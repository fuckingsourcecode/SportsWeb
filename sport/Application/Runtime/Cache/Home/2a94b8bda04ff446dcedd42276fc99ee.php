<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" conatent="width=device-width, initial-scale=1" />
	<title>主页</title>
	<link rel="stylesheet" type="text/css" href="/sports/SuportsWeb/sport/Public/css/bootstrap.min.css" />
	<script src="/sports/SuportsWeb/sport/Public/js/jquery-1.11.3.min.js"></script>
	<script src="/sports/SuportsWeb/sport/Public/js/bootstrap.min.js"></script>
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
						<li class="active">
							<a href="/sports/SuportsWeb/sport/index.php/Home">主页</a>
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
							<a href="/sports/SuportsWeb/sport/index.php/Home/Login/login">登陆</a>
						</li>
						<li href="#">
							<a href="/sports/SuportsWeb/sport/index.php/Home/Register/register">注册</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</body>
</html>