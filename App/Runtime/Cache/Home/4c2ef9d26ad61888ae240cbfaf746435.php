<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo ($staticPath); ?>/layui/css/layui.css">
    <title>就诊来源</title>
</head>
<body>
<div class="layui-card layui-anim layui-anim-up">
    <div class="layui-card-header"><span style="font-weight:700; font-size:1rem; color:#FF5722;"><span class="layui-icon layui-icon-username"></span> <?php echo ($username); ?></span>&nbsp;&nbsp;正在进行就诊来源选项管理</div>
    <div class="layui-card-body">
        <button class="layui-btn" id="fromaddress">新增就诊来源选项</button>
    </div>
    <table class="layui-table layui-anim layui-anim-up" style="table-layout: fixed;" lay-size="sm">
        <thead>
        <tr>
            <th>ID</th>
            <th>疾病名称</th>
            <th>添加时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($result)): foreach($result as $k=>$vo): ?><tr class="rowData" idval="<?php echo ($vo['id']); ?>">
                <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['id']); ?></td>
                <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['fromaddress']); ?></td>
                <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['currtime']); ?></td>
                <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">
                    <a href="javascript:;" title="更改内容" class="layui-icon layui-icon-edit update" style="color:#FFB800;"></a>
                    <a href="javascript:;" title="删除此行" class="layui-icon layui-icon-delete delete" style="color:#FF5722;"></a>
                </td>
            </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
</div>
<script src="<?php echo ($staticPath); ?>/layui/layui.js"></script>
</body>
</html>