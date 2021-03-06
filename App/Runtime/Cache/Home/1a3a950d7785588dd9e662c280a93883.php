<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo ($staticPath); ?>/layui/css/layui.css">
    <title>人员管理</title>
</head>
<body>
<div class="layui-card layui-anim layui-anim-up">
    <div class="layui-card-header"><span style="font-weight:700; font-size:1rem; color:#FF5722;"><span class="layui-icon layui-icon-username"></span> <?php echo ($username); ?></span>&nbsp;&nbsp;正在进行人员管理</div>
    <div class="layui-card-body">
        <p>权限越大责任越大 :)三思而后行</p>
    </div>
</div>
<table class="layui-table layui-anim layui-anim-up" style="table-layout: fixed;" lay-size="sm">
    <thead>
    <tr>
        <th>用户</th>
        <th>预约登记列表</th>
        <th>预约病人搜索</th>
        <th>重复病人查询</th>
        <th>客服明细报表</th>
        <th>月趋势报表</th>
        <th>自定义图像报表</th>
        <th>导出病人数据</th>
        <th>数据横向对比</th>
        <th>数据明细(网络)</th>
        <th>医院项目设置(网络)</th>
        <th>数据明细(电话)</th>
        <th>医院项目设置(电话)</th>
        <th>网站挂号列表</th>
        <th>网站挂号设置</th>
        <th>总体报表</th>
        <th>性别</th>
        <th>年龄</th>
        <th>病患类型</th>
        <th>媒体来源</th>
        <th>来院状态</th>
        <th>接待医生</th>
        <th>客服</th>
        <th>医生设置</th>
        <th>疾病设置</th>
        <th>就诊类型设置</th>
        <th>医院科室设置</th>
        <th>搜索引擎设置</th>
        <th>修改我的资料</th>
        <th>修改密码</th>

        <th>选项设置</th>
        <th>人员管理</th>
        <th>权限管理</th>
        <th>医院列表</th>
        <th>通知管理</th>
        <th>操作日志</th>
        <th>登录错误日志</th>
        <th>添加/修改时状态</th>

        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($result)): foreach($result as $k=>$vo): ?><tr class="rowData" index="<?php echo ($vo['id']); ?>">
            <td ><?php echo ($vo['username']); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['yydj']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['yybr']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['cfbr']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['kfmx']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['yqs']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['zdy']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['dcbr']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['sjdb']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['sjmxwl']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['yyxmwl']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['sjmxdh']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['yyxmdh']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['wzghlb']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['wzghsz']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['ztbb']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['sex']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['old']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['diseases']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['fromaddress']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['status']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['doctor']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['kf']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['doctorsett']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['diseasessett']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['sortsett']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['hospitaldepart']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['seosetting']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['personal']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['changepass']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['changeoption']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['peoplesystem']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['accsystem']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['hospitallist']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['ps']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['log']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['errorlog']==1? 是:否); ?></td>
            <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo ($vo['modstat']==1? 是:否); ?></td>
            <td>
                <a href="javascript:;" title="更改内容" class="layui-icon layui-icon-edit update" style="color:#FFB800;"></a>
                <a href="javascript:;" title="删除此行" class="layui-icon layui-icon-delete delete" style="color:#FF5722;"></a>
            </td>
        </tr><?php endforeach; endif; ?>
    </tbody>
</table>
<div class="pageIndex" style="display:none;"><?php echo ($pageIndex); ?></div>
</body>
<script src="<?php echo ($staticPath); ?>/layui/layui.js"></script>
</html>