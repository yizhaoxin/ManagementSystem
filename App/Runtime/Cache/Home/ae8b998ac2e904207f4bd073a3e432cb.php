<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo ($staticPath); ?>/layui/css/layui.css">
    <title>修改人员信息权限页面</title>
</head>
<body>
<div class="layui-card layui-anim layui-anim-up">
    <div class="layui-card-header"><span style="font-weight:700; font-size:1rem; color:#FF5722;"><span class="layui-icon layui-icon-username"></span> <?php echo ($username); ?></span>&nbsp;&nbsp;正在进行人员信息修改</div>
    <div class="layui-card-body">

    </div>
</div>

<form class="layui-form layui-card layui-anim layui-anim-up" action="<?php echo U('Home/Index/updateSoure/id/' . $id);?>" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">用户</label>
        <div class="layui-input-inline">
            <input type="text" name="name" required lay-verify="required" value="<?php echo ($username); ?>" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">此字段为登录用户信息，请勿随意修改</div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">密码</label>
        <div class="layui-input-inline">
            <input type="text" name="password" required lay-verify="required" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">必填</div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>
<script src="<?php echo ($staticPath); ?>/layui/layui.js"></script>
<script>
    window.onload = function () {
        // layui demo.
        layui.use('from', function(){

            var form = layui.form;
            form.render();

            //监听提交
            form.on('submit(formDemo)', function(data){
                // layer.msg(JSON.stringify(data.field));
            });
        });
    }
</script>
</body>
</html>