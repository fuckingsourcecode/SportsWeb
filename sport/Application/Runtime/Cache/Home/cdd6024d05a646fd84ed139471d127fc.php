<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" conatent="width=device-width, initial-scale=1" />
    <title>排行</title>
     <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/28e7751dbec/integration/bootstrap/3/dataTables.bootstrap.css" />
    <script src="http://cdn.gbtags.com/datatables/1.10.5/js/jquery.js"></script>
    <script src="http://cdn.gbtags.com/datatables/1.10.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/28e7751dbec/integration/bootstrap/3/dataTables.bootstrap.js"></script>
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
    input::-webkit-inner-spin-button {
        -webkit-appearance: none !important;
        margin: 0;
    }
    
    input[type="number"] {
        -moz-appearance: textfield;
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
                        <li>
                            <a href="/sport/index.php/Home">主页</a>
                        </li>
                        <li>
                            <a href="/sport/index.php/Home/Rank/rank">排行</a>
                        </li>
                        <li>
                            <a href="/sport/index.php/Home/Activity/activity">活动</a>
                        </li>
                    </ul>
                    <div class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" placeholder="Search" class="form-control">
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                    <ul class="nav navbar-nav navbar-right" ">
						<li href="# " class="active ">
							<a href="/sport/index.php/Home/Login/login ">登陆</a>
						</li>
						<li href="# ">
							<a href="/sport/index.php/Home/Register/register ">注册</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div id="container ">
        <!-- 定义一个表格元素 -->
        <button id="redraw ">更换数据源</button>
        <table id="example " class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th></th>
                    <th>序号</th>
                    <th>标题</th>
                    <th>连接</th>
                </tr>
            </thead>
            <tbody></tbody>
            <!-- tbody是必须的 -->
        </table>
    </div>
    </body>

</html>
<script>
/*Javascript代码片段*/
(function (argument) {
     $.ajax({
            url: '/sport/index.php/Home/Rank/checkSession',
            type: 'post',
            success: function(data) {
                if (data != 'please login') {
                    $('.navbar-right li a').eq(0).text(data).attr('href', 'https://www.baidu.com');
                    $('.navbar-right li a').eq(1).text('注销').attr('href', '/sport/index.php/Home/Rank/logout');
                }
            }
        });
})();
var t = $('#example').DataTable({
    ajax: {
        //指定数据源
        url: "test.txt "
    },
    //每页显示三条数据
    pageLength: 3,
    columns: [{
        "data ": null //此列不绑定数据源，用来显示序号
    },
    {
        "data ": "ID "
    },
    {
        "data ": "position "
    },
    {
        "data ": "project "
    }],
    "columnDefs ": [{
        // "visible ": false,
        //"targets ": 0
    },
    {
        "render ": function(data, type, row, meta) {
            //渲染 把数据源中的标题和url组成超链接
            return '<a href=" ' + data + ' " target="_blank ">' + '查看' + '</a>';
        },
        //指定是第三列
        "targets ": 3
    }]

});

//前台添加序号
t.on('order.dt search.dt',
function() {
    t.column(0, {
        "search ": 'applied',
        "order ": 'applied'
    }).nodes().each(function(cell, i) {
        cell.innerHTML = i + 1;
    });
}).draw();

//更换数据源（相同格式，但是数据内容不同）
$("#redraw ").click(function() {
    var url = table.api().ajax.url("test.txt ");
    url.load();
});
(function (argument) {
         $.ajax({
            url: '/sport/index.php/Home/Index/checkSession',
            type: 'post',
            success: function(data) {
                if (data != 'please login') {
                    $('.navbar-right li a').eq(0).text(data).attr('href', '/sport/index.php/Home/Personal/personal');
                    $('.navbar-right li a').eq(1).text('注销').attr('href', '/sport/index.php/Home/Index/logout');
                }
            }
        }); 
    })();
</script>