<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>广元协和医院预新媒体</title>
  <link rel="stylesheet" href="<?php echo ($staticPath); ?>/layui/css/layui.css">
    <link rel="icon" href="<?php echo ($staticPath); ?>/images/hospital.ico" type="image/x-icon">
  <style media="screen">
      iframe{border:0px;}
  </style>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
    <div class="layui-logo"><a href="http://localhost/ThinkPHP/index.php/" title="初始化首页" style="color:#009688;"><span class="layui-icon layui-icon-home"></span>&nbsp;&nbsp;广元协和医院预约挂号</a></div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
    </ul>
    <ul class="layui-nav layui-layout-right">
        <li class="layui-nav-item">
          <a href="javascript:;" class="layui-anim layui-anim-up layui-this" id="classification">选择医院科室</a>
          <dl class="layui-nav-child">
              <dd class="layui-anim layui-anim-scaleSpring"><a href="javascript:;" onclick="readyHtml(this);" index="1">广元协和医院男科</a></dd>
              <dd class="layui-anim layui-anim-scaleSpring"><a href="javascript:;" onclick="readyHtml(this);" index="2">广元协和医院妇科</a></dd>
              <dd class="layui-anim layui-anim-scaleSpring"><a href="javascript:;" onclick="readyHtml(this);" index="3">广元协和医院不孕不育科</a></dd>
              <dd class="layui-anim layui-anim-scaleSpring"><a href="javascript:;" onclick="readyHtml(this);" index="4">广元协和医院其他</a></dd>
              <dd class="layui-anim layui-anim-scaleSpring"><a href="javascript:;" onclick="readyHtml(this);" index="5">广元协和医院计划生育科</a></dd>
              <dd class="layui-anim layui-anim-scaleSpring"><a href="javascript:;" onclick="readyHtml(this);" index="6">广元协和医院肛肠科</a></dd>
              <dd class="layui-anim layui-anim-scaleSpring"><a href="javascript:;" onclick="readyHtml(this);" index="7">广元协和医院微创外科</a></dd>
              <dd class="layui-anim layui-anim-scaleSpring"><a href="javascript:;" onclick="readyHtml(this);" index="8">广元协和医院乳腺科</a></dd>
          </dl>
        </li>
      <li class="layui-nav-item">
        <a href="javascript:;">
          <img src="http://run.gyxhyy.com/Public/statics/images/banner2.jpg" class="layui-nav-img">
          <?php echo ($username); ?>
        </a>
        <dl class="layui-nav-child">
          <dd class="layui-anim layui-anim-scaleSpring"><a href="https://github.com/thisnameisprivate" target="_blank">基本资料</a></dd>
          <dd class="layui-anim layui-anim-scaleSpring"><a href="javascript:;" onclick="systeminfo(this);">安全设置</a></dd>
        </dl>
      </li>
      <!--
       <li class="layui-nav-item">
        <a href="javascript:;">在线用户</a>
        <dl class="layui-nav-child">
          <dd class="layui-anim layui-anim-scaleSpring"><a href="">林鸿斌<span class="layui-badge-dot"></span></a></dd>
          <dd class="layui-anim layui-anim-scaleSpring"><a href="">叶慧<span class="layui-badge-dot"></span></a></dd>
          <dd class="layui-anim layui-anim-scaleSpring"><a href="">董鑫<span class="layui-badge-dot"></span></a></dd>
          <dd class="layui-anim layui-anim-scaleSpring"><a href="">admin<span class="layui-badge-dot layui-bg-blue"></span></a></dd>
        </dl>
      </li>
       -->
      <li class="layui-nav-item"><a href="javascript:;" onclick="loginOut();">注销</a></li>
    </ul>
  </div>

  <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <li class="layui-nav-item layui-nav-itemed">
          <a class="" href="javascript:;"><span class="layui-icon layui-icon-list">&nbsp;&nbsp;</span>病人预约管理</a>
          <dl class="layui-nav-child">
            <dd><a class="active" href="javascript:;" onclick="readytab(this);">预约登记列表</a></dd>
            <dd><a class="active" href="javascript:;" onclick="searchPeople(this);">预约病人搜索</a></dd>
            <dd><a class="active" href="javascript:;" onclick="searchPeople(this);">重复病人查询</a></dd>
            <dd><a class="active" href="javascript:;" onclick="detailReport(this);">客服明细报表</a></dd>
            <dd><a class="active" href="javascript:;" onclick="monthData(this);">月趋势报表</a></dd>
            <dd><a class="active" href="javascript:;" onclick="monthData(this);">自定义图像报表</a></dd>
            <dd><a class="active" href="javascript:;" onclick="exportData(this);">导出病人数据</a></dd>
            <dd><a class="active" href="javascript:;" onclick="contrast(this);">数据横向对比</a></dd>
            <dd><a class="active" href="javascript:;" onclick="readytab(this);">添加新的病人资料</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;"><span class="layui-icon layui-icon-chart">&nbsp;&nbsp;</span>访客数据统计</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;" onclick="monthData(this);">数据明细（网络）</a></dd>
            <dd><a href="javascript:;" onclick="monthData(this);">医院项目设置（网络）</a></dd>
            <dd><a href="javascript:;" onclick="monthData(this);">数据明细（电话）</a></dd>
            <dd><a href="javascript:;" onclick="monthData(this);">医院项目设置（电话）</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;"><span class="layui-icon layui-icon-chart-screen">&nbsp;&nbsp;</span>网站挂号管理</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">网站挂号列表</a></dd>
            <dd><a href="javascript:;">网站挂号设置</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;"><span class="layui-icon layui-icon-form">&nbsp;&nbsp;</span>数据列表</a>
          <dl class="layui-nav-child">
            <dd><a class="active" href="javascript:;" onclick="allTable(this);">总体报表</a></dd>
            <dd><a class="active" href="javascript:;" onclick="sex(this);">性别</a></dd>
            <dd><a class="active" href="javascript:;" onclick="readytab(this);">年龄</a></dd>
            <dd><a class="active" href="javascript:;" onclick="readytab(this);">病患类型</a></dd>
            <dd><a class="active" href="javascript:;" onclick="readytab(this);">媒体来源</a></dd>
            <dd><a class="active" href="javascript:;" onclick="readytab(this);">来院状态</a></dd>
            <dd><a class="active" href="javascript:;" onclick="readytab(this);">接待医生</a></dd>
            <dd><a class="active" href="javascript:;" onclick="readytab(this);">客服</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;"><span class="layui-icon layui-icon-set-sm">&nbsp;&nbsp;</span>设置</a>
          <dl class="layui-nav-child">
            <dd><a class="active" href="javascript:;" onclick="monthData(this);">医生设置</a></dd>
            <dd><a class="active" href="javascript:;" onclick="diseases(this);">疾病设置</a></dd>
            <dd><a class="active" href="javascript:;" onclick="fromaddress(this);">就诊类型设置</a></dd>
            <dd><a class="active" href="javascript:;" onclick="monthData(this);">医院科室设置</a></dd>
            <dd><a class="active" href="javascript:;" onclick="monthData(this);">搜索引擎设置</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;"><span class="layui-icon layui-icon-user">&nbsp;&nbsp;</span>我的资料</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;" onclick="systeminfo(this);">修改我的资料</a></dd>
            <dd><a href="javascript:;" onclick="systeminfo(this)">修改密码</a></dd>
            <dd><a href="javascript:;" onclick="monthData(this);">选项设置</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;"><span class="layui-icon layui-icon-app">&nbsp;&nbsp;</span>系统管理</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;" onclick="systeminsert(this);">人员管理</a></dd>
            <dd><a href="javascript:;" onclick="systemPeople(this);">权限管理</a></dd>
            <dd><a href="javascript:;" onclick="monthData(this);">医院列表</a></dd>
            <dd><a href="javascript:;" onclick="monthData(this);">通知列表</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;"><span class="layui-icon layui-icon-log">&nbsp;&nbsp;</span>日志记录</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;" onclick="monthData(this);">操作日志</a></dd>
            <dd><a href="javascript:;" onclick="monthData(this);">登录错误日志</a></dd>
          </dl>
        </li>
      </ul>
    </div>
  </div>

  <div class="layui-body" style="overflow:hidden;">
    <!-- 内容主体区域 -->
    <iframe id="page" src="<?php echo U('Home/Index/ready');?>" width="100%;" height="100%;"></iframe>

    </div>
  </div>

  <div style="position:fixed; bottom:0px; left:200px; z-index:999; font-size:12px; font-weight:600;">
    <!-- 底部固定区域 -->
     <a href="javascript:;" title="发布日期: 2018/8/1日:) Github: https://github.com/thisnameisprivate"><span class="layui-icon layui-icon-website layui-anim layui-anim-fadein layui-anim-loop"></span>&nbsp;&nbsp;&nbsp;广元协和医院预约管理系统 ©</a>
  </div>
<script type="text/javascript">


    /* 读取新的医院首页  */
    function readyHtml (currElement) {
        /* 获取选择科室对象 */
        let ification = document.getElementById('classification');
        // 获取当前选择的医院对象下标
        let id = parseInt(currElement.getAttribute('index'));
        let actives = document.getElementsByClassName('active');


        /* 设置选择科室对象内容为当前选择的选项 */
        ification.innerHTML = currElement.innerText + "<span class='layui-nav-more'></span>";


        /* 设置当前医院科室下的功能下标 */
        for (let i = 0; i < actives.length; i ++) {
            actives[i].setAttribute('index', id);
            actives[i].setAttribute('tab', i);
        }


        let Request = new XMLHttpRequest();
        Request.open("GET", "<?php echo U('Home/Index/ready/id/"+ id +"');?>");
        Request.send();
        Request.onreadystatechange = function () {
            if (Request.readyState == 4 && Request.status == 200) {
                // iframe加载新的数据页面
                document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
            }
        }
    }

    /*
    *    客服明细报表
    *    @param Object detailReport
    *
    **/
    function detailReport (detailReport) {
        // 根据对象获取到对应科室pid
        let pid = parseInt(detailReport.getAttribute('index'));


        // 发送请求显示该科室明细
        let Request = new XMLHttpRequest();
        Request.open("GET", "<?php echo U('Home/Curd/detailReport/pid/"+ pid +"');?>");
        Request.send();
        Request.onreadystatechange = function () {
            if (Request.readyState == 4 && Request.status == 200) {
                document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
            }
        }
    }

    /*
    *    读取新的医院表格页面
    *    @param Object currElement
    *
    **/
    function readytab (currElement) {
        // 获取当前选择的服务对象
        let index = parseInt(currElement.getAttribute('index'));
        let tab = parseInt(currElement.getAttribute('tab'));
        let Request = new XMLHttpRequest();


        if (isNaN(index)) { alert("请先选择医院!"); return false;}


        /* 添加新的病人信息 */
        if (tab == 8) {


            /* 页面跳转传递给后台要添加数据的表格id */

                /*
                * Request.open("GET", "<?php echo U('Home/Index/insertShow/id/"+ index +"');?>");
                Request.send();
                Request.onreadystatechange = function () {
                    if (Request.readyState == 4 && Request.status == 200) {
                        console.log(Request.responseText);
                        document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
                    }
                }
                *
                * */


            window.open("<?php echo U('Home/Index/insertShow/id/"+ index +"');?>");

        } else {

            Request.open("GET", "<?php echo U('Home/Index/showTab/id/"+ index +"');?>");
            Request.send();
            Request.onreadystatechange = function () {
                if (Request.readyState == 4 && Request.status == 200) {
                    // iframe加载新的数据页面
                    document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;

                    /* 在数据加载完成之后调用数据对象的方法 */
                    getCountRow(currElement);
                }
            }
        }
    }


    /*
     *    删除数据,修改数据，查看详情
     *
     * */
    function getCountRow (currElement) {

        /* 获取当前查询的科室找出病种 */
        let pid = document.getElementsByClassName('active')[0].getAttribute('index');

        /* 获取当前页面数据的总条书的父级元素 :)其实我也不想，贼他妈麻烦 */
        let countRow = document.getElementById('page').contentWindow.document.getElementsByClassName("rowData");
        /* 获取当前页码 */
        let pageIndex = parseInt(document.getElementById('page').contentWindow.document.getElementsByClassName('pageIndex')[0].innerText);
        /* 获取当前表 */
        let table = document.getElementById('page').contentWindow.document.getElementsByClassName('table')[0];


        /* 获取每行对象的update, delete, more 点击事件 */
        let countRowIndex = 16;
        for (var i = 0; i < countRow.length; i ++) {
            /*
            * 给每行的update, delete, more 添加点击事件。
            * countRow[0].children[16].children.length 此处可以写 < 3 , 不要问我为什么。
            * 我也不知道在干什么。
            *
             */
            for (var c = 0; c < countRow[0].children[16].children.length; c ++) {
                countRow[i].children[countRowIndex].children[c].index = i;
            }

            /* 查看当前这条详情页面 */
            countRow[i].children[countRowIndex].children[0].onclick = function () {
                // 当前点击的条数在数据库的id
                let id = parseInt(countRow[this.index].getAttribute('index'));
                let tableName = table.getAttribute('table');

                /* 获取当前ID所对应的信息数据 */
                let Request = new XMLHttpRequest();
                Request.open("GET", "<?php echo U('Home/Curd/curd/id/"+ id +"/table/"+ tableName +"/pid/"+ pid +"');?>");
                Request.send();
                Request.onreadystatechange = function () {
                    if (Request.readyState == 4 && Request.status) {
                        document.getElementById("page").contentWindow.document.body.innerHTML = Request.responseText;
                    }
                }
            }

            /* 修改当前这条信息 */
            countRow[i].children[countRowIndex].children[1].onclick = function () {
                // 当前点击条数在数据库的id
                let id = parseInt(countRow[this.index].getAttribute('index'));
                let tableName = table.getAttribute('table');

                /* 修改当前ID所对应的数据信息 */
                let Request = new XMLHttpRequest();
                Request.open('GET', "<?php echo U('Home/Curd/update/id/"+ id +"/table/"+ tableName +"');?>");
                Request.send();
                Request.onreadystatechange = function () {
                    if (Request.readyState == 4 && Request.status) {
                        // document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
                        // 跳转至新页面修改信息
                        window.open("<?php echo U('Home/Curd/update/id/"+ id +"/table/"+ tableName +"/pid/"+ pid +"/pageIndex/"+ pageIndex +"');?>");
                    }
                }
            }

            /* 删除当前点击这条数据 */
            countRow[i].children[countRowIndex].children[2].onclick = function () {
                // 当前点击的条数在数据库的id
                let id = parseInt(countRow[this.index].getAttribute('index'));
                let tableName = table.getAttribute('table');

                let msg = "你确定要删除此条信息？";
                if (confirm(msg)) {
                    /* 删除当前ID所对应的信息数据 */
                    let Request = new XMLHttpRequest();
                    Request.open("GET", "<?php echo U('Home/Curd/delete/id/"+ id +"/table/"+ tableName +"');?>");
                    Request.send();
                    Request.onreadystatechange = function () {
                        if (Request.readyState == 4 && Request.status == 200) {
                            // document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
                            alert("删除数据成功ID为:" + id);
                            readytab(currElement);
                        }
                    }
                } else {
                    return false;
                }
            }
        }

        /*
        *    当iframe页面加载新数据的时候会执行,从新获取对象
        *
        **/
        document.getElementById('page').onload = function () {

            /* 获取当前页面数据的总条数的父级元素 :)其实我也不想，贼他妈麻烦 */
            let countRow = document.getElementById('page').contentWindow.document.getElementsByClassName("rowData");
            /* 获取当前页码 */
            let pageIndex = parseInt(document.getElementById('page').contentWindow.document.getElementsByClassName('pageIndex')[0].innerText);
            /* 获取当前表 */
            let table = document.getElementById('page').contentWindow.document.getElementsByClassName('table')[0];


            /* 获取每行对象的update, delete, more 点击事件 */
            let countRowIndex = 16;
            for (var i = 0; i < countRow.length; i ++) {
                /*
                * 给每行的update, delete, more 添加点击事件。
                * countRow[0].children[16].children.length 此处可以写 < 3 , 不要问我为什么。
                * 我也不知道在干什么。
                *
                 */
                for (var c = 0; c < countRow[0].children[16].children.length; c ++) {
                    countRow[i].children[countRowIndex].children[c].index = i;
                }

                /* 查看当前这条详情页面 */
                countRow[i].children[countRowIndex].children[0].onclick = function () {
                    // 当前点击的条数在数据库的id
                    let id = parseInt(countRow[this.index].getAttribute('index'));
                    let tableName = table.getAttribute('table');

                    /* 获取当前ID所对应的信息数据 */
                    let Request = new XMLHttpRequest();
                    Request.open("GET", "<?php echo U('Home/Curd/curd/id/"+ id +"/table/"+ tableName +"/pid/"+ pid +"');?>");
                    Request.send();
                    Request.onreadystatechange = function () {
                        if (Request.readyState == 4 && Request.status) {
                            document.getElementById("page").contentWindow.document.body.innerHTML = Request.responseText;
                        }
                    }
                }

                /* 修改当前这条信息 */
                countRow[i].children[countRowIndex].children[1].onclick = function () {
                    // 当前点击条数在数据库的id
                    let id = parseInt(countRow[this.index].getAttribute('index'));
                    let tableName = table.getAttribute('table');

                    /* 修改当前ID所对应的数据信息 */
                    let Request = new XMLHttpRequest();
                    Request.open('GET', "<?php echo U('Home/Curd/update/id/"+ id +"/table/"+ tableName +"');?>");
                    Request.send();
                    Request.onreadystatechange = function () {
                        if (Request.readyState == 4 && Request.status) {
                            // document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
                            // 跳转至新页面修改信息
                            window.open("<?php echo U('Home/Curd/update/id/"+ id +"/table/"+ tableName +"/pid/"+ pid +"/pageIndex/"+ pageIndex +"');?>");
                        }
                    }
                }

                /* 删除当前点击这条数据 */
                countRow[i].children[countRowIndex].children[2].onclick = function () {
                    // 当前点击的条数在数据库的id
                    let id = parseInt(countRow[this.index].getAttribute('index'));
                    let tableName = table.getAttribute('table');

                    let msg = "你确定要删除此条信息？";
                    if (confirm(msg)) {
                        /* 删除当前ID所对应的信息数据 */
                        let Request = new XMLHttpRequest();
                        Request.open("GET", "<?php echo U('Home/Curd/delete/id/"+ id +"/table/"+ tableName +"');?>");
                        Request.send();
                        Request.onreadystatechange = function () {
                            if (Request.readyState == 4 && Request.status == 200) {
                                // document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
                                alert("删除数据成功ID为:" + id);
                                readytab(currElement);
                            }
                        }
                    } else {
                        return false;
                    }
                }
            }
        }


        // console.log(countRow[0].children[16].children[2]);
        /*


        for (var i = 0; i < countRow.length; i ++) {
            countRow[i].children[16].children[0].onclick = function () {
                console.log("点击了第" + this +"more");
            }
            countRow[i].children[16].children[1].onclick = function () {
                console.log("点击了第" + this +"update");
            }
            countRow[i].children[16].children[2].onclick = function () {
                console.log("点击了第" + this +"delete");
            }
        }


        */


    }

    /*
    *
    *    注销当前用户
    **/
    function loginOut () {

        let Request = new XMLHttpRequest();
        Request.open("GET", "<?php echo U('Home/Index/loginOut');?>");
        Request.send();
        Request.onreadystatechange = function () {
            if (Request.readyState == 4 && Request.status == 200) {
                let result = parseInt(Request.responseText);
                if (result == 1) window.location.href = "<?php echo U('Home/Index/login');?>";
            }
        }
    }

    /*
    *  预约病人查询，重复病人查询
    *  @param object searchIndex
    *
    * */

    function searchPeople (searchIndex) {
        let index = parseInt(searchIndex.getAttribute('index'));
        let Request = new XMLHttpRequest();

        if (isNaN(index)) { alert("请先选择医院!"); return false;}

        // 发送请求
        Request.open("GET", "<?php echo U('Home/Index/search/id/"+ index +"');?>");
        Request.send();
        Request.onreadystatechange = function () {
            if (Request.readyState == 4 && Request.status == 200) {
                document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
            }
        }

        /* 在数据加载完成之后调用数据对象的方法 */
        document.getElementById('page').onload = function () {
            getCountRow();
        }
    }

    /*
    *
    *  月趋势报表，自定义图像报表
    *
    **/

    function monthData (monthData) {
        xmlhttpReceive('monthData');
    }



    /*
     * 修改个人资料
     */

    function systeminfo () {
        xmlhttpReceive('systeminfo');
    }

    /*
    *   人员管理
    * */

    function systemPeople () {
        let Request = new XMLHttpRequest();
        Request.open("GET", "<?php echo U('Home/Index/systemPeople');?>");
        Request.send();
        Request.onreadystatechange = function () {
            if (Request.readyState == 4 && Request.status == 200) {
                document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
                // iframe 加载完成后执行
                let countRow = document.getElementById('page').contentWindow.document.getElementsByClassName('rowData');
                /* 获取每行对象的update, delete, more 点击事件 */
                let countRowIndex = 6;
                for (var i = 0; i < countRow.length; i ++) {
                    /*
                    * 给每行的update, delete, more 添加点击事件。
                    * countRow[0].children[16].children.length 此处可以写 < 2 , 不要问我为什么。
                    * 我也不知道在干什么。
                    *
                     */
                    for (var c = 0; c < countRow[0].children[countRowIndex].children.length; c ++) {
                        countRow[i].children[countRowIndex].children[c].index = i;
                    }


                    /* 修改当前这条信息 */
                    countRow[i].children[countRowIndex].children[0].onclick = function () {
                        let id = parseInt(countRow[this.index].getAttribute('index'));
                        // 跳转至新的页面修改信息
                        window.open("<?php echo U('Home/Index/updatePeople/id/"+ id +"');?>");
                    }

                    /* 删除当前点击这条数据 */
                    countRow[i].children[countRowIndex].children[1].onclick = function () {
                        let id = parseInt(countRow[this.index].getAttribute('index'));
                        let msg = "你确定要删除此成员的信息包括登录信息吗？";
                        if (confirm(msg) == true) {
                            let Request = new XMLHttpRequest();
                            Request.open("GET", "<?php echo U('Home/Index/deletePeople/id/"+ id +"');?>");
                            Request.send();
                            Request.onreadystatechange = function () {
                                if (Request.readyState == 4 && Request.status == 200) {
                                    alert("删除成功ID为:" + id + ":)");
                                    systemPeople();
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    /*
    *   人员添加
    * */
    function systeminsert ()
    {
        xmlhttpReceive('systeminsert');
    }

    /**
     *
     * 导出病人数据
     */

    function exportData (currElement) {
        let index = parseInt(currElement.getAttribute('index'));
        let Request = new XMLHttpRequest();
        Request.open("GET", "<?php echo U('Home/Index/exportData');?>");
        Request.send();
        Request.onreadystatechange = function () {
            if (Request.readyState == 4 && Request.status == 200) {
                window.open("<?php echo U('Home/Index/exportData/id/"+ index +"');?>");
            }
        }

    }

    /*
    *
    *  数据横向对比
    * */

    function contrast (currElement) {
        xmlhttpReceive('contrast');
    }

    /*
    *  数据总体报表
    * */

    function allTable (currElement) {
        let index = parseInt(currElement.getAttribute('index'));
        let Request = new XMLHttpRequest();
        Request.open("GET", "<?php echo U('Home/Index/allTable/id/"+ index +"');?>");
        Request.send();
        Request.onreadystatechange = function () {
            if (Request.readyState == 4 && Request.status == 200) {
                document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
            }
        }
    }

    /*
    *
    *   疾病选项管理
    *
    * */

    function diseases (currElement) {
        let index = parseInt(currElement.getAttribute('index'));
        let Request = new XMLHttpRequest();
        Request.open("GET", "<?php echo U('Home/Index/diseases/id/"+ index +"');?>");
        Request.send();
        Request.onreadystatechange = function () {
            if (Request.readyState == 4 && Request.status == 200) {
                document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;

                // 页面加载完毕之后执行
                let countRow = document.getElementById('page').contentWindow.document.getElementsByClassName('rowData');
                let add = document.getElementById('page').contentWindow.document.getElementById('diseasesadd');
                let countRowIndex = 3;
                for (let i = 0; i < countRow.length; i ++) {

                    for (let c = 0; c < countRow[0].children[countRowIndex].children.length; c ++) {
                        countRow[i].children[countRowIndex].children[c].index = i;
                    }

                    // 修改这条信息
                    countRow[i].children[countRowIndex].children[0].onclick = function () {
                        let id = parseInt(countRow[this.index].getAttribute('idval'));
                        let Request = new XMLHttpRequest();
                        Request.open("GET", "<?php echo ('Home/Index/diseasesUpdate/id/"+ id +"');?>");
                        Request.send();
                        Request.onreadystatechange = function () {
                            if (Request.readyState == 4 && Request.status == 200) {
                                document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
                            }
                        }
                    }
                    // 删除这条信息
                    countRow[i].children[countRowIndex].children[1].onclick = function () {
                        let id = parseInt(countRow[this.index].getAttribute('idval'));
                        let msg = "你确认删除该病种吗";

                        if (confirm(msg) == true) {
                            let Request = new XMLHttpRequest();
                            Request.open("GET", "<?php echo U('Home/Index/diseasesDelete/id/"+ id +"');?>");
                            Request.send();
                            Request.onreadystatechange = function () {
                                if (Request.readyState == 4 && Request.status == 200) {
                                    alert("删除成功ID为:" + id + ":)");
                                    diseases();
                                }
                            }
                        }
                    }
                }

                // 添加新的信息
                add.onclick = function () {
                    let id = parseInt(currElement.getAttribute('index'));
                    let Request = new XMLHttpRequest();
                    Request.open("GET", "<?php echo U('Home/Index/diseasesadd/id/"+ id +"');?>");
                    Request.send();
                    Request.onreadystatechange = function () {
                        if (Request.readyState == 4 && Request.status == 200) {
                            document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
                        }
                    }
                }
            }
        }
    }

    /*
    *
    *   就诊来源
    * */

    function fromaddress (currElement) {
        let Request = new XMLHttpRequest();
        Request.open('GET', "<?php echo U('Home/Index/fromaddress');?>");
        Request.send();
        Request.onreadystatechange = function () {
            if (Request.readyState == 4 && Request.status == 200) {
                document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;

                let countRow = document.getElementById('page').contentWindow.document.getElementsByClassName('rowData');
                let add = document.getElementById('page').contentWindow.document.getElementById('fromaddress');
                let countRowIndex = 3;

                for (let i = 0; i < countRow.length; i ++) {
                    for (let c = 0; c < countRow[0].children[countRowIndex].children.length; c ++) {
                        countRow[i].children[countRowIndex].children[c].index = i;
                    }


                    // 修改这条信息
                    countRow[i].children[countRowIndex].children[0].onclick = function () {
                        let id = parseInt(countRow[this.index].getAttribute('idval'));
                        let Request = new XMLHttpRequest();
                        Request.open("GET", "<?php echo U('Home/Index/fromaddressUpdate/id/"+ id +"');?>");
                        Request.send();
                        Request.onreadystatechange = function () {
                            if (Request.readyState == 4 && Request.status == 200) {
                                document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
                            }
                        }
                    }

                    // 删除这条信息
                    countRow[i].children[countRowIndex].children[1].onclick = function () {
                        let id = parseInt(countRow[this.index].getAttribute('idval'));
                        let msg = "你确定删除该就诊来源吗?";

                        if (confirm(msg)) {
                            let Request = new XMLHttpRequest();
                            Request.open("GET", "<?php echo U('Home/Index/fromaddressDelete/id/"+ id +"');?>");
                            Request.send();
                            Request.onreadystatechange = function () {
                                if (Request.readyState == 4 && Request.status) {
                                    alter("删除成功ID为:" + id + ":)");
                                    fromaddress();
                                }
                            }
                        }
                    }
                }
                add.onclick = function () {
                    let id = parseInt(currElement.getAttribute('index'));
                    let Request = new XMLHttpRequest();
                    Request.open("GET", "<?php echo U('Home/Index/fromaddressadd/id/" + id + "');?>");
                    Request.send();
                    Request.onreadystatechange = function () {
                        if (Request.readyState == 4 && Request.status == 200) {
                            document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
                        }
                    }
                }
            }
        }
    }

    /*
    *
    *  按性别查询显示
    * */

    function sex (currElement) {
        let index = parseInt(currElement.getAttribute('index'));
        let Request = new XMLHttpRequest();
        Request.open('GET', "<?php echo U('Home/Index/sex/id/"+ index +"');?>");
        Request.send();
        Request.onreadystatechange = function () {
            if (Request.readyState == 4 && Request.status == 200) {
                document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
            }
        }
    }

    /*
    *  ajax 封装
    *  显示页面到iframe
    * */
    function xmlhttpReceive (func) {
        let Request = new XMLHttpRequest();
        Request.open("GET", "<?php echo U('Home/Index/"+ func +"');?>");
        Request.send();
        Request.onreadystatechange = function () {
            if (Request.readyState == 4 && Request.status == 200) {
                    document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
            }
        }
    }


</script>
<script src="<?php echo ($staticPath); ?>/layui/layui.js"></script>
<script>
    layui.use(['element', 'layer'], function(){
      var element = layui.element;
      var layer = layui.layer;
      layer.msg("请先选择医院");
    });
</script>
</body>
</html>