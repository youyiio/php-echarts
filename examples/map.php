<?php
/**
 * 测试准备,php-echarts根目录下
 * > composer update
 * > php example\map.php
 */
header('Content-Type: text/html; charset=utf-8');
if (is_file('vendor/autoload.php')) {
    require('vendor/autoload.php');
} else {
    require('../vendor/autoload.php');
}

use beyong\echarts\ECharts;
use beyong\echarts\Option;
use beyong\echarts\charts\Map;

$echarts = ECharts::init("#myChart");

$option = new Option();
$option->title(["text" => "世界国家安全指数"]);
$option->addVisualMap([
    "min" => 0, "max" => 100, "text" => ['High', 'Low'],
    "calculable" => true, "inRange" => ["color" => ['#4aec8b', '#0c9442']]
]);
$option->tooltip(["trigger" => 'item', "formatter" => '{a}<br>{b}  {c}'] );
$echarts->option($option);

$chart = new Map();
$chart->name = 'safety index';
$chart->map = 'world';
// 国家名称映射为标准的ISO3166-1国家短码（echarts默认是用不规范的英文国家名）
$chart->nameMap = \beyong\echarts\Countries::nameMap();
// 在data中使用ISO3166-1国家短码
$chart->data = [
    [
        'name' => 'CN',
        'value' => 100,
    ],
    [
        'name' => 'RU',
        'value' => 82,
    ],    
    [
        'name' => 'JP',
        'value' => 86,
    ], 
    [
        'name' => 'RU',
        'value' => 82,
    ], 
    [
        'name' => 'KR',
        'value' => 78,
    ], 
    [
        'name' => 'US',
        'value' => 60,
    ],
    [
        'name' => 'IN',
        'value' => 40,
    ],
    [
        'name' => 'CA',
        'value' => 75,
    ],
    [
        'name' => 'AU',
        'value' => 65,
    ]
];

$chart->label = [
    "emphasis" => ["show" => true, "textStyle" => ["color" => '#fff']]
];

$chart->roam = true;
$chart->scaleLimit = [ "min" => 1, "max" => 5];
$chart->itemStyle = [
    "normal" => ["borderColor" => "#bbb", "areaColor" => "#F5F6FA"],
    "emphasis" => ["areaColor" => "#441744"]
];

$echarts->addSeries($chart);

$echarts->addExtraScript('world.js', 'https://www.xiaoqu.net.cn/theme/xiaoqu/static/js');
$content = $echarts->render(['style' => 'height: 640px;']);

echo $content;

//控制台运行
if (substr(PHP_SAPI_NAME(), 0, 3) == 'cli') {
    file_put_contents(__DIR__ . '/log/map.html', $content);
    exec("start " . __DIR__ . '/log/map.html'); //启动网页
}