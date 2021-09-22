<?php
/**
 * 测试准备,php-echarts根目录下
 * > composer update
 * > php example\render_pdf.php
 * 
 * composer require nesk/puphpeteer
 * npm install @nesk/puphpeteer
 * 
 * 若npm安装慢，尝试更换国内npm镜像
 * npm config set registry https://registry.npm.taobao.org
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
use beyong\echarts\charts\Line;
use beyong\echarts\charts\Bar;
use beyong\echarts\render\PdfEngine;

$echarts = ECharts::init("#myChart");
$engine = new PdfEngine();
$engine->setOutputFile(__DIR__ . '/log/render.pdf');
$echarts->use($engine);

$option = new Option();
$option->title(['text' => 'ECharts 入门示例', 'x' => 'center', 'textAlign' => 'left']);
$option->xAxis(["data" => 
    ['衬衫', '羊毛衫', '雪纺衫', '裤子', '高跟鞋', '袜子']
]);
$option->yAxis(new YAxis());

$chart = new Line();
$chart["data"] = [5, 20, 36, 10, 10, 20];
$chart["smooth"] = true;

$chart2 = new Bar();
$chart2->data = [6, 20, 36, 10, 10, 20];
$option->series([$chart, $chart2]);

$echarts->option($option);

$content = $echarts->render();
echo $content;
