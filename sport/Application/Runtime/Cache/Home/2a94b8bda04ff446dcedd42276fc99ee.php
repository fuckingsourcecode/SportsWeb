<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" conatent="width=device-width, initial-scale=1" />
    <title>主页</title>
    <link rel="stylesheet" type="text/css" href="/Sportsweb/sport/Public/css/bootstrap.min.css" />
    <script src="/Sportsweb/sport/Public/js/jquery-1.11.3.min.js"></script>
    <script src="/Sportsweb/sport/Public/js/bootstrap.min.js"></script>
    <style>
    body {
        padding: 60px;
    }
    
    img {
        height: 400px !important;
        width: 100%;
    }
    
    .wrap {
        margin-top: 2%;
    }
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
                        <li class="active">
                            <a href="/Sportsweb/sport/index.php/Home">主页</a>
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
                    <ul class="nav navbar-nav navbar-right">
                        <li href="#">
                            <a href="/Sportsweb/sport/index.php/Home/Login/login">登陆</a>
                        </li>
                        <li href="#">
                            <a href="/Sportsweb/sport/index.php/Home/Register/register">注册</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/Sportsweb/sport/Public/images/1.jpg" alt="">
                    <div class="carousel-caption">One</div>
                </div>
                <div class="item">
                    <img src="/Sportsweb/sport/Public/images/2.jpg" alt="">
                    <div class="carousel-caption">Two</div>
                </div>
                <div class="item">
                    <img src="/Sportsweb/sport/Public/images/3.jpg" alt="">
                    <div class="carousel-caption">Three</div>
                </div>
                <div class="item">
                    <img src="/Sportsweb/sport/Public/images/4.jpg" alt="">
                    <div class="carousel-caption">Four</div>
                </div>
            </div>
            <a href="#carousel-example-generic" role="button" data-slide="prev" class="left carousel-control">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">上一张</span>
            </a>
            <a href="#carousel-example-generic" role="button" data-slide="next" class="right carousel-control">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">下一张</span>
            </a>
        </div>
    </div>
    <div class="wrap text-center">
        <div class="container">
            <div class="row col-sm-6 text-center">
                <table class="table table-bordered">
                    <thead>
                        <th class="text-center">
                            快报
                        </th>
                    </thead>
                    <tbody>
                        <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td>
                                    <a href="#"><?php echo ($vo["title"]); ?></a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="row col-sm-6 text-center">
                <table class="table table-bordered">
                    <thead>
                        <th class="text-center">
                            时间
                        </th>
                        <th class="text-center">
                            项目
                        </th>
                        <th class="text-center">
                            地点
                        </th>
                    </thead>
                    <tbody>
                        <?php if(is_array($array)): $i = 0; $__LIST__ = $array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><tr>
                                <td>
                                    <?php echo ($vo1["hosttime"]); ?>
                                </td>
                                <td class="text-center">
                                    <?php echo ($vo1["name"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo1["where"]); ?>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<script>
$(document).ready(function() {
    (function() {
        $.ajax({
            url: '/Sportsweb/sport/index.php/Home/Index/checkSession',
            type: 'post',
            success: function(data) {
                if (data != 'please login') {
                    $('.navbar-right li a').eq(0).text(data).attr('href', 'https://www.baidu.com');
                    $('.navbar-right li a').eq(1).text('注销').attr('href', '/Sportsweb/sport/index.php/Home/Index/logout');
                }
            }
        });
        // $.ajax({
        // 	url: '',
        // 	type: 'GET',
        // 	dataType: 'json',
        // 	success: function (data) {
        // 		 var obj = JSON.parse(data);
        // 		 obj.map(function (argument) {
        // 		 	$('.publish .list-group').append('<li class="list-item"><a href="#"'+ this[] +'</li>')
        // 		 });
        // 	}
        // })
    })();
});
</script>