<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo ($staticPath); ?>/layui/css/layui.css">
    <title>来源信息</title>
</head>
<body>
<div class="layui-card layui-anim layui-anim-up">
    <div class="layui-card-header"><span style="font-weight:700; font-size:1rem; color:#FF5722;"><span class="layui-icon layui-icon-username"></span> <?php echo ($username); ?></span>&nbsp;&nbsp;正在进行来源选项修改ID为: <?php echo ($id); ?></div>
    <div class="layui-card-body">
        <form class="layui-form layui-card layui-anim layui-anim-up" action="<?php echo U('Home/Index/fromaddressSource/id/' . $id);?>" method="post">
            <div class="layui-form-item">
                <label class="layui-form-label">来源名称</label>
                <div class="layui-input-inline">
                    <input type="text" name="fromaddress" required lay-verify="required" value="<?php echo ($result[0]['fromaddress']); ?>" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">此字段为当前科室下病种的选项</div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
<script src="<?php echo ($staticPath); ?>/layui/layui.js"></script>
<script type="text/javascript">
    layui.use('form', function(){
        var form = layui.form;

        //监听提交
        form.on('submit(formDemo)', function(data){
            // layer.msg(JSON.stringify(data.field));
        });
    });
</script>
</html>