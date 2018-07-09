<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>广元协和医院新媒体</title>
    <link rel="stylesheet" href="<?php echo ($staticPath); ?>/layui/css/layui.css">
    <style media="screen">
        /* 关闭iframe线条 */
        body{border:0px;}
        /* 关闭iframe的左边间距 */
        .layui-container{margin-left:0px;}
        /* 面包屑*/
        .layui-breadcrumb{visibility:visible;}
        .breadCrumbs{padding:10px; margin-bottom:20px;}
    </style>
</head>
<body>
    <div class="breadCrumbs">
        <span class="layui-breadcrumb" lay-separator="/">
          <a class="layui-anim-upbit" href="javascript:;">首页</a>
          <a><cite> <?php echo ($item); ?></cite></a>
        </span>
    </div>
    <div class="layui-container">
      <div class="layui-row">
        <div class="layui-col-md5">
            <div class="layui-card">
              <div class="layui-card-header layui-bg-green">挂号数据统计</div>
              <div class="layui-card-body">
                <p>
                    明日:
                    <?php if(is_array($tommor)): foreach($tommor as $k=>$vo): echo ($k); ?> : <?php echo ($vo); endforeach; endif; ?>
                </p>
                <p>
                    今日:
                    <?php if(is_array($toDay)): foreach($toDay as $k=>$vo): echo ($k); ?> : <?php echo ($vo); ?>&nbsp;&nbsp;&nbsp;<?php endforeach; endif; ?>
                </p>
                <p>
                    昨日:
                    <?php if(is_array($prevDay)): foreach($prevDay as $k=>$vo): echo ($k); ?> : <?php echo ($vo); ?>&nbsp;&nbsp;&nbsp;<?php endforeach; endif; ?>
                </p>
                <p>
                    本月:
                    <?php if(is_array($currentMonth)): foreach($currentMonth as $k=>$vo): echo ($k); ?> : <?php echo ($vo); ?>&nbsp;&nbsp;&nbsp;<?php endforeach; endif; ?>
                </p>
              </div>
            </div>
        </div>
        <div class="layui-col-md1">&nbsp;</div>
        <div class="layui-col-md3">
            <div class="layui-card">
              <div class="layui-card-header layui-bg-blue">本月到院排行</div>
              <div class="layui-card-body">
                  <?php if(is_array($nameList)): foreach($nameList as $k=>$vo): ?><p><span class="layui-icon layui-icon-rate-solid" style="color:#FF5722;"></span><?php echo ($k); ?> : <?php echo ($vo); ?></p><?php endforeach; endif; ?>
              </div>
            </div>
        </div>
        <div class="layui-col-md3">
            <div class="layui-card">
              <div class="layui-card-header layui-bg-orange">本月预约排行榜</div>
              <div class="layui-card-body">
                  <?php if(is_array($nameList)): foreach($nameList as $k=>$vo): ?><p><span class="layui-icon layui-icon-rate-solid" style="color:#FF5722;"></span><?php echo ($k); ?> : <?php echo ($vo); ?></p><?php endforeach; endif; ?>
              </div>
            </div>
        </div>
      </div>

      <div class="layui-row">
        <div class="layui-col-md5">
            <div class="layui-card">
              <div class="layui-card-header layui-bg-red">预约未定数据</div>
              <div class="layui-card-body">
                <p>
                    明日:
                    <?php if(is_array($tommor)): foreach($tommor as $k=>$vo): echo ($k); ?> : <?php echo ($vo); endforeach; endif; ?>
                </p>
                <p>
                    今日:
                    <?php if(is_array($toDay)): foreach($toDay as $k=>$vo): echo ($k); ?> : <?php echo ($vo); ?>&nbsp;&nbsp;&nbsp;<?php endforeach; endif; ?>
                </p>
                <p>
                    昨日:
                    <?php if(is_array($prevDay)): foreach($prevDay as $k=>$vo): echo ($k); ?> : <?php echo ($vo); ?>&nbsp;&nbsp;&nbsp;<?php endforeach; endif; ?>
                </p>
                <p>
                    本月:
                    <?php if(is_array($currentMonth)): foreach($currentMonth as $k=>$vo): echo ($k); ?> : <?php echo ($vo); ?>&nbsp;&nbsp;&nbsp;<?php endforeach; endif; ?>
                </p>
              </div>
            </div>
        </div>
        <div class="layui-col-md1">&nbsp;</div>
        <div class="layui-col-md3">
            <div class="layui-card">
              <div class="layui-card-header layui-bg-blue">上月到院排行</div>
              <div class="layui-card-body">
                  <?php if(is_array($nameList)): foreach($nameList as $k=>$vo): ?><p><span class="layui-icon layui-icon-rate-solid" style="color:#FF5722;"></span><?php echo ($k); ?> : <?php echo ($vo); ?></p><?php endforeach; endif; ?>
              </div>
            </div>
        </div>
        <div class="layui-col-md3">
            <div class="layui-card">
              <div class="layui-card-header layui-bg-orange">上月预约排行榜</div>
              <div class="layui-card-body">
                  <?php if(is_array($nameList)): foreach($nameList as $k=>$vo): ?><p><span class="layui-icon layui-icon-rate-solid" style="color:#FF5722;"></span><?php echo ($k); ?> : <?php echo ($vo); ?></p><?php endforeach; endif; ?>
              </div>
            </div>
        </div>
      </div>
    </div>
</body>
<script src="<?php echo ($staticPath); ?>/layui/layui.js"></script>
</html>