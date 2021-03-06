<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="<?php echo ($staticPath); ?>/js/echart.js"></script>
    <script src="<?php echo ($staticPath); ?>/js/macarons.js"></script>
    <title>月趋势报表</title>
    <style>
        .container{height:800px; width:100%; position:fixed; top:0; left:0; bottom:0; right:0; margin:auto;}
        .pieBar{float:left; width:29%; height:100%;}
        .line{float:right; width:70%; height:100%;}
    </style>
</head>
<body>
<div class="container">
    <div class="pieBar">
        <div id="pie" style="width:100%; height:400px;"></div>
        <div id="pie2" style="width:100%; height:400px;"></div>
    </div>
    <div class="line">
        <div id="line" style="width:100%; height:50%;"></div>
        <div id="line2" style="width:100%; height:50%;"></div>
    </div>
</div>
</body>
<script type="text/javascript">
    let myChartPie = echarts.init(document.getElementById('pie'), 'macarons');
    let myChartPie2 = echarts.init(document.getElementById('pie2'));
    let myChartLine = echarts.init(document.getElementById('line'), 'macarons');
    let myChartLine2 = echarts.init(document.getElementById('line2'));
    let date = new Date();
    // 获取月份封装
    function getTime (x) {
        let date = new Date();
        date.setMonth((date.getMonth() + 1) - x);
        let year = date.getFullYear();
        let month = date.getMonth() + 1;

        if (month < 10) {
            month = '0' + month;
        }

        return year + '-' + month;
    }
    // 获取年份封装
    function getyear (x) {
        let date = new Date();
        year = date.getFullYear();
        if (x) {
            year = date.getFullYear() - x;
        }
        return year;
    }
    myChartPie.setOption({
        title: {
            text: '近3年总数据对比'
        },
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b}: {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            x: 'right',
            data:['预约','预到','已到','未到']
        },
        series: [
            {
                name:'来源状态',
                type:'pie',
                radius: ['50%', '70%'],
                avoidLabelOverlap: false,
                label: {
                    normal: {
                        show: false,
                        position: 'center'
                    },
                    emphasis: {
                        show: true,
                        textStyle: {
                            fontSize: '30',
                            fontWeight: 'bold'
                        }
                    }
                },
                labelLine: {
                    normal: {
                        show: false
                    }
                },
                data:[
                    {value:<?php echo ($data['currYearReser'][0]['count'] + $data['lastYearReser'][0]['count'] + $data['beforeYearReser'][0]['count']); ?>, name:'预约'},
                    {value:<?php echo ($data['currYearAdvan'][0]['count'] + $data['lastYearAdvan'][0]['count'] + $data['beforeYearAdvan'][0]['count']); ?>, name:'预到'},
                    {value:<?php echo ($data['currYearArrival'][0]['count'] + $data['lastYearArrival'][0]['count'] + $data['beforeYearArrival'][0]['count']); ?>, name:'已到'},
                    {value:<?php echo ($data['currYearOutArrival'][0]['count'] + $data['lastYearOutArrival'][0]['count'] + $data['beforeYearOutArrival'][0]['count']); ?>, name:'未到'}
                ]
            }
        ]
    });
    myChartLine.setOption({
            title: {
                text: '近3年详细数据'
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data:['预约','预到','已到','未到']
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            toolbox: {
                feature: {
                    saveAsImage: {}
                }
            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: [getyear(2), getyear(1), getyear()]
            },
            yAxis: {
                type: 'value'
            },
            series: [
                {
                    name:'预约',
                    type:'line',
                    stack: '总量',
                    data:[<?php echo ($data['beforeYearReser'][0]['count']); ?>, <?php echo ($data['lastYearReser'][0]['count']); ?>, <?php echo ($data['currYearReser'][0]['count']); ?>]
                },
                {
                    name:'预到',
                    type:'line',
                    stack: '总量',
                    data:[<?php echo ($data['beforeYearAdvan'][0]['count']); ?>, <?php echo ($data['lastYearAdvan'][0]['count']); ?>, <?php echo ($data['currYearAdvan'][0]['count']); ?>]
                },
                {
                    name:'已到',
                    type:'line',
                    stack: '总量',
                    data:[<?php echo ($data['beforeYearArrival'][0]['count']); ?>, <?php echo ($data['lastYearArrival'][0]['count']); ?>, <?php echo ($data['currYearArrival'][0]['count']); ?>]
                },
                {
                    name:'未到',
                    type:'line',
                    stack: '总量',
                    data:[<?php echo ($data['beforeYearOutArrival'][0]['count']); ?>, <?php echo ($data['lastYearOutArrival'][0]['count']); ?>, <?php echo ($data['currYearOutArrival'][0]['count']); ?>]
                },

            ]
    });
    myChartLine2.setOption({
        title: {
            text: '近7个月详细数据'
        },
        tooltip: {
            trigger: 'axis'
        },
        legend: {
            data:['预约','预到','已到','未到']
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        toolbox: {
            feature: {
                saveAsImage: {}
            }
        },
        xAxis: {
            type: 'category',
            boundaryGap: false,
            data: [getTime(7), getTime(6), getTime(5), getTime(4), getTime(3), getTime(2), getTime(1)]
        },
        yAxis: {
            type: 'value'
        },

        series: [
            {
                name:'预约',
                type:'line',
                stack: '总量',
                data:[<?php echo ($month['sixMonthReser'][0]['count']); ?>,<?php echo ($month['fiveMonthReser'][0]['count']); ?>,<?php echo ($month['fourMonthReser'][0]['count']); ?>,<?php echo ($month['threeMonthReser'][0]['count']); ?>,<?php echo ($month['twoMonthReser'][0]['count']); ?>,<?php echo ($month['oneMonthReser'][0]['count']); ?>,<?php echo ($month['currMonthReser'][0]['count']); ?>]
            },
            {
                name:'预到',
                type:'line',
                stack: '总量',
                data:[<?php echo ($month['sixMonthAdvan'][0]['count']); ?>,<?php echo ($month['fiveMonthAdvan'][0]['count']); ?>,<?php echo ($month['fourMonthAdvan'][0]['count']); ?>,<?php echo ($month['threeMonthAdvan'][0]['count']); ?>,<?php echo ($month['twoMonthAdvan'][0]['count']); ?>,<?php echo ($month['oneMonthAdvan'][0]['count']); ?>,<?php echo ($month['currMonthAdvan'][0]['count']); ?>]
            },
            {
                name:'已到',
                type:'line',
                stack: '总量',
                data:[<?php echo ($month['sixMonthArrival'][0]['count']); ?>,<?php echo ($month['fiveMonthArrival'][0]['count']); ?>,<?php echo ($month['fourMonthArrival'][0]['count']); ?>,<?php echo ($month['threeMonthArrival'][0]['count']); ?>,<?php echo ($month['twoMonthArrival'][0]['count']); ?>,<?php echo ($month['oneMonthArrival'][0]['count']); ?>,<?php echo ($month['currMonthArrival'][0]['count']); ?>]
            },
            {
                name:'未到',
                type:'line',
                stack: '总量',
                data:[<?php echo ($month['sixMonthOutArrival'][0]['count']); ?>,<?php echo ($month['fiveMonthOutArrival'][0]['count']); ?>,<?php echo ($month['fourMonthOutArrival'][0]['count']); ?>,<?php echo ($month['threeMonthOutArrival'][0]['count']); ?>,<?php echo ($month['twoMonthOutArrival'][0]['count']); ?>,<?php echo ($month['oneMonthOutArrival'][0]['count']); ?>,<?php echo ($month['currMonthOutArrival'][0]['count']); ?>]
            },
    ]
    });

</script>
</html>