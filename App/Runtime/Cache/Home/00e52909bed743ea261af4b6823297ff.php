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

            <?php if(is_array($departmentList)): foreach($departmentList as $index=>$vo): ?><dd class="layui-amin layui-anim-scaleSpring"><a href="javascript:;" onclick="readyHtml(this);" index="<?php echo ($index + 1); ?>" tableName="<?php echo ($vo['iden']); ?>"><?php echo ($vo['username']); ?></a></dd><?php endforeach; endif; ?>

          </dl>
        </li>
      <li class="layui-nav-item">
        <a href="javascript:;">
          <img src="http://run.gyxhyy.com/Public/statics/images/banner2.jpg" class="layui-nav-img">
          <?php echo ($username); ?>
        </a>
        <dl class="layui-nav-child">
          <dd class="layui-anim layui-anim-scaleSpring"><a href="javascript:;">基本资料</a></dd>
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
            <dd><a class="active" href="javascript:;" onclick="monthlyTrend(this);">月趋势报表</a></dd>
            <dd><a class="active" href="javascript:;" onclick="monthlyTrend(this);">自定义图像报表</a></dd>
            <dd><a class="active" href="javascript:;" onclick="exportData(this);">导出病人数据</a></dd>
            <dd><a class="active" href="javascript:;" onclick="contrast(this);">数据横向对比</a></dd>
            <dd><a class="active" href="javascript:;" onclick="readytab(this);">添加新的病人资料</a></dd>
          </dl>
        </li>
        <!--
        访客数据统计功能
         <li class="layui-nav-item">
          <a href="javascript:;"><span class="layui-icon layui-icon-chart">&nbsp;&nbsp;</span>访客数据统计</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;" onclick="monthData(this);">数据明细（网络）</a></dd>
            <dd><a href="javascript:;" onclick="monthData(this);">医院项目设置（网络）</a></dd>
            <dd><a href="javascript:;" onclick="monthData(this);">数据明细（电话）</a></dd>
            <dd><a href="javascript:;" onclick="monthData(this);">医院项目设置（电话）</a></dd>
          </dl>
        </li>
         -->
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
            <dd><a class="active" href="javascript:;" onclick="typedata(this);">病患类型</a></dd>
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
            <dd><a href="javascript:;" onclick="hospital(this);">医院列表</a></dd>
            <dd><a href="javascript:;" onclick="monthData(this);">通知列表</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;"><span class="layui-icon layui-icon-log">&nbsp;&nbsp;</span>日志记录</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;" onclick="monthData(this);">操作日志</a></dd>
            <dd><a href="javascript:;" onclick="errorlog(this);">登录错误日志</a></dd>
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
function readyHtml(currElement) {
	let ification = document.getElementById('classification');
	let id = parseInt(currElement.getAttribute('index'));
	let actives = document.getElementsByClassName('active');
	ification.innerHTML = currElement.innerText + "<span class='layui-nav-more'></span>";
	for (let i = 0; i < actives.length; i++) {
		actives[i].setAttribute('index', id);
		actives[i].setAttribute('tab', i)
	}
	let Request = new XMLHttpRequest();
	Request.open("GET", "<?php echo U('Home/Index/ready/id/" + id + "');?>");
	Request.send();
	Request.onreadystatechange = function() {
		if (Request.readyState == 4 && Request.status == 200) {
			document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
            readytableName(currElement, id);
		}
	}
}
// 2018/10/8 Update Start. if ... onclick select jump to data table.
function  readytableName (currElement, id) {
    var doc = document.getElementById('page').contentWindow.document;
    // 把要点击的元素储存到对象.
    onclickIden = {
        bt1: doc.getElementsByClassName('tommorday')[0],
        bt2: doc.getElementsByClassName('terday')[0],
        bt3: doc.getElementsByClassName('terdayArrived')[0],
        bt4: doc.getElementsByClassName('terdayOutArrived')[0],
        bt5: doc.getElementsByClassName('yesterday')[0],
        bt6: doc.getElementsByClassName('yesterdayArrived')[0],
        bt7: doc.getElementsByClassName('yesterdayOutArrived')[0],
        bt8: doc.getElementsByClassName('currMonth')[0],
        bt9: doc.getElementsByClassName('currMonthArrived')[0],
        bt10: doc.getElementsByClassName('currMonthOutArrived')[0],
        bt11: doc.getElementsByClassName('yesterMonth')[0],
        bt12: doc.getElementsByClassName('yesterMonthArrived')[0],
        bt13: doc.getElementsByClassName('yesterMonthOutArrived')[0],
        bt14: doc.getElementsByClassName('tommodayRese')[0],
        bt15: doc.getElementsByClassName('todayRese')[0],
        bt16: doc.getElementsByClassName('terdayRese')[0],
        bt17: doc.getElementsByClassName('currMonthRese')[0],
        bt18: doc.getElementsByClassName('yesterMonthRese')[0],
    };
    onclickIden.bt1.onclick = () => { getIdenDataTab(currElement, id, 1); }
    onclickIden.bt2.onclick = () => { getIdenDataTab(currElement, id, 2); }
    onclickIden.bt3.onclick = () => { getIdenDataTab(currElement, id, 3); }
    onclickIden.bt4.onclick = () => { getIdenDataTab(currElement, id, 4); }
    onclickIden.bt5.onclick = () => { getIdenDataTab(currElement, id, 5); }
    onclickIden.bt6.onclick = () => { getIdenDataTab(currElement, id, 6); }
    onclickIden.bt7.onclick = () => { getIdenDataTab(currElement, id, 7); }
    onclickIden.bt8.onclick = () => { getIdenDataTab(currElement, id, 8); }
    onclickIden.bt9.onclick = () => { getIdenDataTab(currElement, id, 9); }
    onclickIden.bt10.onclick = () => { getIdenDataTab(currElement, id, 10); }
    onclickIden.bt11.onclick = () => { getIdenDataTab(currElement, id, 11); }
    onclickIden.bt12.onclick = () => { getIdenDataTab(currElement, id, 12); }
    onclickIden.bt13.onclick = () => { getIdenDataTab(currElement, id, 13); }
    onclickIden.bt14.onclick = () => { getIdenDataTab(currElement, id, 14); }
    onclickIden.bt15.onclick = () => { getIdenDataTab(currElement, id, 15); }
    onclickIden.bt16.onclick = () => { getIdenDataTab(currElement, id, 16); }
    onclickIden.bt17.onclick = () => { getIdenDataTab(currElement, id, 17); }
    onclickIden.bt18.onclick = () => { getIdenDataTab(currElement, id, 18); }
}
function getIdenDataTab (currElement, id, iden) {
    var Request = new XMLHttpRequest();
    Request.open('GET', "<?php echo U('Home/Index/showTab/id/"+ id +"/iden/"+ iden +"');?>");
    Request.send();
    Request.onreadystatechange = () => {
        if (Request.readyState == 4 && Request.status == 200) {
            document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
            getCountRow(currElement);
        }
    }
}
// 2018/10/8 Update End.
function detailReport(detailReport) {
	let pid = parseInt(detailReport.getAttribute('index'));
	let Request = new XMLHttpRequest();
	Request.open("GET", "<?php echo U('Home/Curd/detailReport/pid/" + pid + "');?>");
	Request.send();
	Request.onreadystatechange = function () {
		if (Request.readyState == 4 && Request.status == 200) {
			document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
		}
	}
}
function readytab(currElement) {
	let index = parseInt(currElement.getAttribute('index'));
	let tab = parseInt(currElement.getAttribute('tab'));
	let Request = new XMLHttpRequest();
	if (isNaN(index)) {
		alert("请先选择医院!");
		return false
	}
	if (tab == 8) {
		Request.open("GET", "<?php echo U('Home/Index/insertShow/id/" + index + "');?>");
		Request.send();
		Request.onreadystatechange = function() {
			if (Request.readyState == 4 && Request.status == 200) {
				document.getElementById('page').setAttribute('src', "<?php echo U('Home/Index/insertShow/id/" + index + "');?>")
			}
		}
	} else {
		Request.open("GET", "<?php echo U('Home/Index/showTab/id/" + index + "');?>");
		Request.send();
		Request.onreadystatechange = function() {
			if (Request.readyState == 4 && Request.status == 200) {
				document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
				getCountRow(currElement);
			}
		}
	}
}
function getCountRow(currElement) {
	let pid = document.getElementsByClassName('active')[0].getAttribute('index');
	let countRow = document.getElementById('page').contentWindow.document.getElementsByClassName("rowData");
	let pageIndex = parseInt(document.getElementById('page').contentWindow.document.getElementsByClassName('pageIndex')[0].innerText);
	let table = document.getElementById('page').contentWindow.document.getElementsByClassName('table')[0];
	let countRowIndex = 16;
	for (var i = 0; i < countRow.length; i++) {
		for (var c = 0; c < countRow[0].children[16].children.length; c++) {
            countRow[i].children[countRowIndex].children[c].index = i
            // 2018/10/8 Update. if arivaled add tr color is red. Hope to rebuild the project on the third day
            if (countRow[i].children[14].innerText == '已到') {
                countRow[i].style.color = '#FF5722';
            } else {
                countRow[i].style.color = '#01AAED';
            }
            // 2018/10/8 Update End.
        }
		countRow[i].children[countRowIndex].children[0].onclick = function() {
			let id = parseInt(countRow[this.index].getAttribute('index'));
			let tableName = table.getAttribute('table');
			let Request = new XMLHttpRequest();
			Request.open("GET", "<?php echo U('Home/Curd/Curd/id/" + id + "/table/" + tableName + "/pid/" + pid + "');?>");
			Request.send();
			Request.onreadystatechange = function() {
				if (Request.readyState == 4 && Request.status) {
					document.getElementById("page").contentWindow.document.body.innerHTML = Request.responseText
				}
			}
		}
		countRow[i].children[countRowIndex].children[1].onclick = function() {
			let id = parseInt(countRow[this.index].getAttribute('index'));
			let tableName = table.getAttribute('table');
			let Request = new XMLHttpRequest();
			Request.open('GET', "<?php echo U('Home/Curd/update/id/" + id + "/table/" + tableName + "');?>");
			Request.send();
			Request.onreadystatechange = function() {
				if (Request.readyState == 4 && Request.status) {
					window.open("<?php echo U('Home/Curd/update/id/" + id + "/table/" + tableName + "/pid/" + pid + "/pageIndex/" + pageIndex + "');?>")
				}
			}
		}
		countRow[i].children[countRowIndex].children[2].onclick = function() {
			let id = parseInt(countRow[this.index].getAttribute('index'));
			let tableName = table.getAttribute('table');
			let msg = "你确定要删除此条信息？";
			if (confirm(msg)) {
				let Request = new XMLHttpRequest();
				Request.open("GET", "<?php echo U('Home/Curd/delete/id/" + id + "/table/" + tableName + "');?>");
				Request.send();
				Request.onreadystatechange = function() {
					if (Request.readyState == 4 && Request.status == 200) {
						alert("删除数据成功ID为:" + id);
						readytab(currElement)
					}
				}
			} else {
				return false
			}
		}
	}
	document.getElementById('page').onload = function() {
		let countRow = document.getElementById('page').contentWindow.document.getElementsByClassName("rowData");
		let pageIndex = parseInt(document.getElementById('page').contentWindow.document.getElementsByClassName('pageIndex')[0].innerText);
		let table = document.getElementById('page').contentWindow.document.getElementsByClassName('table')[0];
		let countRowIndex = 16;
		for (var i = 0; i < countRow.length; i++) {
			for (var c = 0; c < countRow[0].children[16].children.length; c++) {
				countRow[i].children[countRowIndex].children[c].index = i;
                // 2018/10/8 Update. if arivaled add tr color is red. Hope to rebuild the project on the third day
                if (countRow[i].children[14].innerText == '已到') {
                    countRow[i].style.color = '#FF5722';
                } else {
                    countRow[i].style.color = '#01AAED';
                }
                // 2018/10/8 Update End.
			}
			countRow[i].children[countRowIndex].children[0].onclick = function() {
				let id = parseInt(countRow[this.index].getAttribute('index'));
				let tableName = table.getAttribute('table');
				let Request = new XMLHttpRequest();
				Request.open("GET", "<?php echo U('Home/Curd/Curd/id/" + id + "/table/" + tableName + "/pid/" + pid + "');?>");
				Request.send();
				Request.onreadystatechange = function() {
					if (Request.readyState == 4 && Request.status) {
						document.getElementById("page").contentWindow.document.body.innerHTML = Request.responseText
					}
				}
			}
			countRow[i].children[countRowIndex].children[1].onclick = function() {
				let id = parseInt(countRow[this.index].getAttribute('index'));
				let tableName = table.getAttribute('table');
				let Request = new XMLHttpRequest();
				Request.open('GET', "<?php echo U('Home/Curd/update/id/" + id + "/table/" + tableName + "');?>");
				Request.send();
				Request.onreadystatechange = function() {
					if (Request.readyState == 4 && Request.status) {
						window.open("<?php echo U('Home/Curd/update/id/" + id + "/table/" + tableName + "/pid/" + pid + "/pageIndex/" + pageIndex + "');?>")
					}
				}
			}
			countRow[i].children[countRowIndex].children[2].onclick = function() {
				let id = parseInt(countRow[this.index].getAttribute('index'));
				let tableName = table.getAttribute('table');
				let msg = "你确定要删除此条信息？";
				if (confirm(msg)) {
					let Request = new XMLHttpRequest();
					Request.open("GET", "<?php echo U('Home/Curd/delete/id/" + id + "/table/" + tableName + "');?>");
					Request.send();
					Request.onreadystatechange = function() {
						if (Request.readyState == 4 && Request.status == 200) {
							alert("删除数据成功ID为:" + id);
							readytab(currElement)
						}
					}
				} else {
					return false
				}
			}
		}
	}
}
function loginOut() {
	let Request = new XMLHttpRequest();
	Request.open("GET", "<?php echo U('Home/Index/loginOut');?>");
	Request.send();
	Request.onreadystatechange = function() {
		if (Request.readyState == 4 && Request.status == 200) {
			let result = parseInt(Request.responseText);
			if (result == 1) window.location.href = "<?php echo U('Home/Index/login');?>"
		}
	}
}
function searchPeople(searchIndex) {
	let index = parseInt(searchIndex.getAttribute('index'));
	let Request = new XMLHttpRequest();
	if (isNaN(index)) {
		alert("请先选择医院!");
		return false
	}
	Request.open("GET", "<?php echo U('Home/Index/search/id/" + index + "');?>");
	Request.send();
	Request.onreadystatechange = function() {
		if (Request.readyState == 4 && Request.status == 200) {
			document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText
		}
	}
	document.getElementById('page').onload = function() {
		getCountRow()
	}
}
function monthData() {
	xmlhttpReceive('monthData')
}
function systeminfo() {
	xmlhttpReceive('systeminfo')
}
function systemPeople() {
	let Request = new XMLHttpRequest();
	Request.open("GET", "<?php echo U('Home/Index/systemPeople');?>");
	Request.send();
	Request.onreadystatechange = function() {
		if (Request.readyState == 4 && Request.status == 200) {
			document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
			let countRow = document.getElementById('page').contentWindow.document.getElementsByClassName('rowData');
			for (var i = 0; i < countRow.length; i++) {
				for (var c = 0; c < countRow[0].lastElementChild.length; c++) {
					countRow[i].lastElementChild.children[c].index = i
				}
				countRow[i].lastElementChild.children[0].onclick = function() {
					let id = parseInt(this.parentNode.parentNode.getAttribute('index'));
					window.open("<?php echo U('Home/Index/updatePeople/id/" + id + "');?>")
				}
				countRow[i].lastElementChild.children[1].onclick = function() {
					let id = parseInt(this.parentNode.parentNode.getAttribute('index'));
					let msg = "你确定要删除此成员的信息包括登录信息吗？";
					if (confirm(msg) == true) {
						let Request = new XMLHttpRequest();
						Request.open("GET", "<?php echo U('Home/Index/deletePeople/id/" + id + "');?>");
						Request.send();
						Request.onreadystatechange = function() {
							if (Request.readyState == 4 && Request.status == 200) {
								alert("删除成功ID为:" + id + ":)");
								systemPeople()
							}
						}
					}
				}
			}
		}
	}
}
function systeminsert() {
	xmlhttpReceive('systeminsert')
}
function exportData(currElement) {
	let index = parseInt(currElement.getAttribute('index'));
	let Request = new XMLHttpRequest();
	Request.open("GET", "<?php echo U('Home/Index/exportData');?>");
	Request.send();
	Request.onreadystatechange = function() {
		if (Request.readyState == 4 && Request.status == 200) {
			document.getElementById('page').setAttribute('src', "<?php echo U('Home/Index/exportData/id/" + index + "');?>")
		}
	}
}
function contrast(currElement) {
	let index = parseInt(currElement.getAttribute('index'));
	let Request = new XMLHttpRequest();
	Request.open("GET", "<?php echo U('Home/Index/contrast/id/" + index + "');?>");
	Request.send();
	Request.onreadystatechange = function() {
		if (Request.readyState == 4 && Request.status == 200) {
			document.getElementById('page').setAttribute('src', "<?php echo U('Home/Index/contrast/id/" + index + "');?>")
		}
	}
}
function allTable(currElement) {
	let index = parseInt(currElement.getAttribute('index'));
	let Request = new XMLHttpRequest();
	Request.open("GET", "<?php echo U('Home/Index/allTable/id/" + index + "');?>");
	Request.send();
	Request.onreadystatechange = function() {
		if (Request.readyState == 4 && Request.status == 200) {
			document.getElementById('page').setAttribute('src', "<?php echo U('Home/Index/allTable/id/" + index + "');?>")
		}
	}
}
function diseases(currElement) {
	let index = parseInt(currElement.getAttribute('index'));
	let Request = new XMLHttpRequest();
	Request.open("GET", "<?php echo U('Home/Index/diseases/id/" + index + "');?>");
	Request.send();
	Request.onreadystatechange = function() {
		if (Request.readyState == 4 && Request.status == 200) {
			document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
			let countRow = document.getElementById('page').contentWindow.document.getElementsByClassName('rowData');
			let add = document.getElementById('page').contentWindow.document.getElementById('diseasesadd');
			let countRowIndex = 3;
			for (let i = 0; i < countRow.length; i++) {
				for (let c = 0; c < countRow[0].children[countRowIndex].children.length; c++) {
					countRow[i].children[countRowIndex].children[c].index = i
				}
				countRow[i].children[countRowIndex].children[0].onclick = function() {
					let id = parseInt(countRow[this.index].getAttribute('idval'));
					let Request = new XMLHttpRequest();
					Request.open("GET", "<?php echo U('Home/Index/diseasesUpdate/id/" + id + "');?>");
					Request.send();
					Request.onreadystatechange = function() {
						if (Request.readyState == 4 && Request.status == 200) {
							document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText
						}
					}
				}
				countRow[i].children[countRowIndex].children[1].onclick = function() {
					let id = parseInt(countRow[this.index].getAttribute('idval'));
					let msg = "你确认删除该病种吗";
					if (confirm(msg) == true) {
						let Request = new XMLHttpRequest();
						Request.open("GET", "<?php echo U('Home/Index/diseasesDelete/id/" + id + "');?>");
						Request.send();
						Request.onreadystatechange = function() {
							if (Request.readyState == 4 && Request.status == 200) {
								alert("删除成功ID为:" + id + ":)");
								diseases()
							}
						}
					}
				}
			}
			add.onclick = function() {
				let id = parseInt(currElement.getAttribute('index'));
				let Request = new XMLHttpRequest();
				Request.open("GET", "<?php echo U('Home/Index/diseasesadd/id/" + id + "');?>");
				Request.send();
				Request.onreadystatechange = function() {
					if (Request.readyState == 4 && Request.status == 200) {
						document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText
					}
				}
			}
		}
	}
}
function fromaddress(currElement) {
	let Request = new XMLHttpRequest();
	Request.open('GET', "<?php echo U('Home/Index/fromaddress');?>");
	Request.send();
	Request.onreadystatechange = function() {
		if (Request.readyState == 4 && Request.status == 200) {
			document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText;
			let countRow = document.getElementById('page').contentWindow.document.getElementsByClassName('rowData');
			let add = document.getElementById('page').contentWindow.document.getElementById('fromaddress');
			let countRowIndex = 3;
			for (let i = 0; i < countRow.length; i++) {
				for (let c = 0; c < countRow[0].children[countRowIndex].children.length; c++) {
					countRow[i].children[countRowIndex].children[c].index = i
				}
				countRow[i].children[countRowIndex].children[0].onclick = function() {
					let id = parseInt(countRow[this.index].getAttribute('idval'));
					let Request = new XMLHttpRequest();
					Request.open("GET", "<?php echo U('Home/Index/fromaddressUpdate/id/" + id + "');?>");
					Request.send();
					Request.onreadystatechange = function() {
						if (Request.readyState == 4 && Request.status == 200) {
							document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText
						}
					}
				}
				countRow[i].children[countRowIndex].children[1].onclick = function() {
					let id = parseInt(countRow[this.index].getAttribute('idval'));
					let msg = "你确定删除该就诊来源吗?";
					if (confirm(msg)) {
						let Request = new XMLHttpRequest();
						Request.open("GET", "<?php echo U('Home/Index/fromaddressDelete/id/" + id + "');?>");
						Request.send();
						Request.onreadystatechange = function() {
							if (Request.readyState == 4 && Request.status) {
								alter("删除成功ID为:" + id + ":)");
								fromaddress()
							}
						}
					}
				}
			}
			add.onclick = function() {
				let id = parseInt(currElement.getAttribute('index'));
				let Request = new XMLHttpRequest();
				Request.open("GET", "<?php echo U('Home/Index/fromaddressadd/id/" + id + "');?>");
				Request.send();
				Request.onreadystatechange = function() {
					if (Request.readyState == 4 && Request.status == 200) {
						document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText
					}
				}
			}
		}
	}
}
function sex(currElement) {
	let index = parseInt(currElement.getAttribute('index'));
	let Request = new XMLHttpRequest();
	Request.open('GET', "<?php echo U('Home/Index/sex/id/" + index + "');?>");
	Request.send();
	Request.onreadystatechange = function() {
		if (Request.readyState == 4 && Request.status == 200) {
			document.getElementById('page').setAttribute('src', "<?php echo U('Home/Index/sex/id/" + index + "');?>")
		}
	}
}
function hospital() {
	let Request = new XMLHttpRequest();
	Request.open('GET', '<?php echo U("Home/Index/hospital");?>');
	Request.send();
	Request.onreadystatechange = function() {
		if (Request.readyState == 4 && Request.status == 200) {
			document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText
		}
	}
}
function xmlhttpReceive(func) {
	let Request = new XMLHttpRequest();
	Request.open("GET", "<?php echo U('Home/Index/" + func + "');?>");
	Request.send();
	Request.onreadystatechange = function() {
		if (Request.readyState == 4 && Request.status == 200) {
			document.getElementById('page').contentWindow.document.body.innerHTML = Request.responseText
		}
	}
}
function monthlyTrend(monthlyTrend) {
	let index = parseInt(monthlyTrend.getAttribute('index'));
	let Request = new XMLHttpRequest();
	if (isNaN(index)) {
		alert("请先选择医院!");
		return false
	}
	document.getElementById('page').setAttribute('src', "<?php echo U('Home/Index/monthlyTrend/id/" + index + "');?>")
}
function typedata(currElement) {
	let index = parseInt(currElement.getAttribute('index'));
	let Request = new XMLHttpRequest();
	document.getElementById('page').setAttribute('src', "<?php echo U('Home/Index/type/id/" + index + "');?>")
}
function errorlog() {
	document.getElementById('page').setAttribute('src', "<?php echo U('Home/Index/errorlog');?>")
}
</script>
<script src="<?php echo ($staticPath); ?>/layui/layui.js"></script>
<script src="http://upcdn.b0.upaiyun.com/libs/jquery/jquery-2.0.2.min.js">
</script>
<script>
    layui.use(['element', 'layer', 'form'], function(){
      var element = layui.element;
      var layer = layui.layer;
      layer.msg("请先选择医院");
    });
</script>
</body>
</html>