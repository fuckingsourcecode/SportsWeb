<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal</title>
</head>
<body>
<?php if(is_array($array)): $i = 0; $__LIST__ = $array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>学号：<?php echo ($vo["id"]); ?><br>
    姓名：<?php echo ($vo["name"]); ?><br>
    班级：<?php echo ($vo["classid"]); ?><br>
    年级：<?php echo ($vo["grade"]); ?><br>
    学院：<?php echo ($vo["academy"]); ?><br>
    性别：<?php echo ($vo["sex"]); ?><br>
    已报项目：<?php echo ($vo["project"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>