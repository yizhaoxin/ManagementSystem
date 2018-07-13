<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link rel="stylesheet" href="<?php echo ($staticPath); ?>/layui/css/layui.css">
  <style type="text/css"></style>
</head>
<body>
    <div class="layui-card layui-anim layui-anim-up">
      <div class="layui-card-header"><?php echo ($item); ?></div>
      <div class="layui-card-body">
          <table class="layui-table" style="table-layout: fixed;" lay-size="sm">
            <thead>
              <tr>
                <th></th>
                <th colspan="3">今日</th>
                <th></th>
                <th colspan="3">昨日</th>
                <th></th>
                <th colspan="3">本月</th>
                <th></th>
                <th colspan="3">上月</th>
              </tr>
              <tr>
                  <th>客服</th>
                  <th>总共</th>
                  <th>已到</th>
                  <th>未到</th>
                  <th></th>
                  <th>总共</th>
                  <th>已到</th>
                  <th>未到</th>
                  <th></th>
                  <th>总共</th>
                  <th>已到</th>
                  <th>未到</th>
                  <th></th>
                  <th>总共</th>
                  <th>已到</th>
                  <th>未到</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <th>叶慧</th>
                    <th>模拟数据</th>
                    <th>模拟数据</th>
                    <th>模拟数据</th>
                    <th></th>
                    <th>模拟数据</th>
                    <th>模拟数据</th>
                    <th>模拟数据</th>
                    <th></th>
                    <th>模拟数据</th>
                    <th>模拟数据</th>
                    <th>模拟数据</th>
                    <th></th>
                    <th>模拟数据</th>
                    <th>模拟数据</th>
                    <th>模拟数据</th>
                </tr>
                <tr>
                    <th>董鑫</th>
                    <th>模拟数据</th>
                    <th>模拟数据</th>
                    <th>模拟数据</th>
                    <th></th>
                    <th>模拟数据</th>
                    <th>模拟数据</th>
                    <th>模拟数据</th>
                    <th></th>
                    <th>模拟数据</th>
                    <th>模拟数据</th>
                    <th>模拟数据</th>
                    <th></th>
                    <th>模拟数据</th>
                    <th>模拟数据</th>
                    <th>模拟数据</th>
                </tr>
            </tbody>
          </table>
      </div>
    </div>
</body>
</html>