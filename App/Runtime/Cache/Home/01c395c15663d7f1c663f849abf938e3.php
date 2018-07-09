<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加新的病人资料</title>
    <link rel="stylesheet" href="<?php echo ($staticPath); ?>/layui/css/layui.css">
    <style media="screen">
        /* 关闭iframe线条 */
        body{border:0px;}
        /* 关闭iframe的左边间距 */
        .layui-container{margin-left:0px;}
    </style>
</head>
<body>
<p><?php echo ($item); ?></p>
<div class="layui-container">
    <form class="layui-form" action="<?php echo U('Admin/Index/index/id/' . $id);?>" method="post">
        <div class="layui-form-item">
          <label class="layui-form-label">姓名</label>
          <div class="layui-input-inline">
            <input type="text" name="name" required lay-verify="required" placeholder="请输入姓名" autocomplete="off" class="layui-input">
          </div>
          <div class="layui-form-mid layui-word-aux">必填</div>
        </div>
      <div class="layui-form-item">
        <label class="layui-form-label">年龄</label>
        <div class="layui-input-inline">
          <input type="number" name="old" required lay-verify="required" placeholder="请输入年龄" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">必填</div>
      </div>
      <div class="layui-form-item">
        <label class="layui-form-label">电话</label>
        <div class="layui-input-inline">
          <input type="number" name="phone" required lay-verify="required" placeholder="请输入电话" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">必填</div>
      </div>
      <div class="layui-form-item">
        <label class="layui-form-label">病患类型</label>
        <div class="layui-input-inline">
          <select name="diseases" lay-verify="required">
            <!-- foreach 病种选择 -->


          </select>
        </div>
      </div>
      <div class="layui-form-item">
        <label class="layui-form-label">就诊来源</label>
        <div class="layui-input-inline">
          <select name="fromAddress" lay-verify="required">
            <!-- foreach 病种选择 -->
            <option value="0">网络</option>
            <option value="1">电话</option>
            <option value="2">QQ</option>
            <option value="3">营销QQ</option>
            <option value="4">Wechat</option>
            <option value="5">公众号</option>
            <option value="6">陌陌</option>
            <option value="7">直播</option>
            <option value="8">黔医通</option>
          </select>
        </div>
      </div>

      <div class="layui-form-item">
        <label class="layui-form-label">是否本市</label>
        <div class="layui-input-block">
          <input type="checkbox" name="switch" lay-skin="switch">
        </div>
        <div class="layui-form-mid layui-word-aux">可选(默认为其他市)</div>
      </div>
      <div class="layui-form-item">
        <label class="layui-form-label">是男是女？</label>
        <div class="layui-input-block">
          <input type="radio" name="sex" value="男" title="男" checked>
          <input type="radio" name="sex" value="女" title="女">
        </div>
      </div>
      <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">咨询内容</label>
        <div class="layui-input-block">
          <textarea name="desc" placeholder="请输入内容" required lay-verify="required" class="layui-textarea"></textarea>
        </div>
      </div>
      <div class="layui-form-item">
        <label class="layui-form-label">专家号</label>
        <div class="layui-input-inline">
          <input type="text" name="expert" required lay-verify="required" placeholder="一般为你名字的缩写" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">必填</div>
      </div>
      <div class="layui-form-item">
          <label class="layui-form-label">预约时间</label>
          <div class="layui-inline">
              <input name="oldDate" type="text" class="layui-input" id="date">
          </div>
      </div>
      <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">备注</label>
        <div class="layui-input-block">
          <textarea name="desc" placeholder="其他备注信息" class="layui-textarea"></textarea>
        </div>
      </div>
      <div class="layui-form-item">
        <label class="layui-form-label">赴约状态</label>
        <div class="layui-input-inline">
          <select name="status" lay-verify="required">
            <!-- foreach 病种选择 -->
            <option value="0">等待</option>
            <option value="1">已到</option>
            <option value="2">未到</option>
            <option value="3">预约未定</option>
            <option value="4">全流失</option>
            <option value="5">半流失</option>
            <option value="6">已诊治</option>
          </select>
        </div>
      </div>
</div>
<div class="layui-container">
        <div class="layui-form-item">
            <label class="layui-form-label">赴约时间</label>
            <div class="layui-inline">
                <input name="newDate" type="text" class="layui-input" id="date2">
            </div>
        </div>

      <div class="layui-form-item">
        <div class="layui-input-block">
          <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
          <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
      </div>
    </form>
</div>
<script src="<?php echo ($staticPath); ?>/layui/layui.js"></script>
<script>
window.onload = function () {
    // layui demo.
        layui.use(['form', 'laydate'], function(){

            var form = layui.form;
            var laydate = layui.laydate;

            form.render();
            laydate.render({
                elem: '#date'
            });
            laydate.render({
                elem: '#date2'
            })

            //监听提交
            form.on('submit(formDemo)', function(data){
            layer.msg(JSON.stringify(data.field));
            return false;
        });
    });
}
</script>
</body>
</html>