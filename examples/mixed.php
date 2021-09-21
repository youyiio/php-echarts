<?php
header('Content-Type: text/html; charset=utf-8');
if (is_file('vendor/autoload.php')) {
    require('vendor/autoload.php');
} else {
    require('../vendor/autoload.php');
}


use beyong\echarts\ECharts;
use beyong\echarts\options\YAxis;
use beyong\echarts\Option;
use beyong\echarts\charts\Line;
use beyong\echarts\charts\Bar;

$echarts = ECharts::init("#myChart");

$option = new Option();
$option->title(['text' => 'ECharts 入门示例']);
$option->xAxis(["data" => ['衬衫', '羊毛衫', '雪纺衫', '裤子', '高跟鞋', '袜子']]);
$option->yAxis([]);

$chart = new Line();
$chart["data"] = [5, 20, 36, 10, 10, 20];

$chart2 = new Bar();
$chart2->date = [6, 20, 36, 10, 10, 20];
$option->series([$chart, $chart2]);

$echarts->option($option);

$content = $echarts->render();
echo $content;

//控制台运行
if (substr(PHP_SAPI_NAME(), 0, 3) == 'cli') {
    file_put_contents(__DIR__ . '/log/mixed.html', $content);
    exec("start " . __DIR__ . '/log/mixed.html'); //启动网页
}