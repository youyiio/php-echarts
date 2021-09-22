<?php
/**
 * 测试准备,php-echarts根目录下
 * > composer update
 * > php example\dynamic.php
 */
header('Content-Type: text/html; charset=utf-8');
if (is_file('vendor/autoload.php')) {
    require('vendor/autoload.php');
} else {
    require('../vendor/autoload.php');
}

use beyong\echarts\ECharts;
use beyong\echarts\Option;

if (isset($_GET['ajax']) && $_GET['ajax'] == 'true') {
    // random data
    echo json_encode(['num' => rand(0,100), 'data' => uniqid()]);
} else {

    $echarts = ECharts::init("#myChart");

    $option = new Option();

    // random data
    $data = [];
    $xAxisData = [];
    for($i = 0; $i < 50; $i++){
        $data[] = rand(30,70);
        $xAxisData[] = $i;
    }
    $option->xAxis([
        'type' => 'category',
        'data' => $xAxisData,
    ]);
    $option->yAxis([
        'type' => 'value',
    ]);
    $option->series([
        [
        'type' => 'line',
        'data' => $data
        ]
    ]);

    $echarts->option($option);
    $echarts->addExtraScript('jquery.min.js', 'https://cdn.bootcss.com/jquery/3.3.1');
    $content = $echarts->render();

    $jsFragment = 
<<<HTML
<script>
    setInterval(function(){
        $.ajax({
            data: {
                'ajax': true
            },
            dataType: 'json',
            success: function(json){
                var echart = {$echarts->getEchartsJsVar()};
                var option = echart.getOption();

                // shift a item then push a new
                option.series[0].data.shift();
                option.series[0].data.push(json.num);
                option.xAxis[0].data.shift();
                option.xAxis[0].data.push(json.data);
                
                echart.setOption({
                    series: option.series,
                    xAxis: option.xAxis
                });
            }
        });
    }, 1000);
</script>
HTML;
    
    $content .= $jsFragment;
    echo $content;

    //控制台运行
    if (substr(PHP_SAPI_NAME(), 0, 3) == 'cli') {
        file_put_contents(__DIR__ . '/log/dynamic.html', $content);
        exec("start " . __DIR__ . '/log/dynamic.html'); //启动网页
    }
}

