<?php
/**
 * 测试准备,php-echarts根目录下
 * > composer update
 * > php example\bar.php
 */
header('Content-Type: text/html; charset=utf-8');
if (is_file('vendor/autoload.php')) {
    require('vendor/autoload.php');
} else {
    require('../vendor/autoload.php');
}


use beyong\echarts\ECharts;
use beyong\echarts\options\YAxis;
use beyong\echarts\Option;
use beyong\echarts\charts\Bar;

$echarts = ECharts::init("#myChart");

$option = new Option();
$option->title(['text' => 'ECharts 入门示例']);
$option->xAxis(["data" => ['衬衫', '羊毛衫', '雪纺衫', '裤子', '高跟鞋', '袜子']]);
$option->yAxis([]);
$option->legend(["data" => ['销量']]); //显示指定的series的标记，对应chart->name

$chart = new Bar();
$chart->name = '销量';
$chart->data = [5, 20, 36, 10, 10, 20];
$option->addSeries($chart);

$echarts->option($option);

$content = $echarts->render();
echo $content;


//控制台运行
if (substr(PHP_SAPI_NAME(), 0, 3) == 'cli') {
    file_put_contents(__DIR__ . '/log/bar.html', $content);
    exec("start " . __DIR__ . '/log/bar.html'); //启动网页
}