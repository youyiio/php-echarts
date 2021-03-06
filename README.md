# php-echarts

**一款支持Apache EChart5.0+图表的php开发库** 优先ThinkPHP5/6的开发及测试。

Apache EChart5.0已经最新发布，在视觉效果、动画效果和大数据展示方面已经远超之前的版本；
故不考虑EChart5.0之前版本的兼容问题；建议直接尝试5.0+


## 目录 
* [第一个EChart5.0 demo](#第一个EChart5.0 demo) 
* [安装](#安装) 
    * [使用 Composer 安装 (强烈推荐)](#使用-composer-安装-强烈推荐)
    * [github下载 或 直接手动下载源码](#github下载-或-直接手动下载源码)
        * [下载文件](#下载文件)
        * [引入自动载入文件](#引入自动载入文件)


## 第一个EChart5.0 demo

**ThinkPHP5/6 示例**
```
use beyong\echarts\ECharts;
use beyong\echarts\options\YAxis;
use beyong\echarts\Option;
use beyong\echarts\charts\Bar;

$echarts = ECharts::init("#myChart");

$option = new Option();
$option->title(['text' => 'ECharts 入门示例']);
$option->xAxis(["data" => ['衬衫', '羊毛衫', '雪纺衫', '裤子', '高跟鞋', '袜子']]);
$option->yAxis([]);

$chart = new Bar();
$chart->data = [5, 20, 36, 10, 10, 20];
$option->addSeries($chart);

$echarts->option($option);

$content = $echarts->render();
echo $content;
```



## 安装
### 使用 Composer 安装 (强烈推荐):
支持 `psr-4` 规范, 开箱即用
```
composer require youyiio/php-echarts
```

### github下载 或 直接手动下载源码:
需手动引入自动载入文件

#### 下载文件:
git clone https://github.com/youyiio/php-echarts php-echarts


#### 引入自动载入文件:
使用时引入或者全局自动引入

`require_once '/path/to/php-echarts/src/autoload.php`;



## 示例 - Line
```
$echarts = ECharts::init("#myChart");

$option = new Option();
$option->title(['text' => 'ECharts 入门示例']);
$option->xAxis(["data" => ['衬衫', '羊毛衫', '雪纺衫', '裤子', '高跟鞋', '袜子']]);
$option->yAxis([]);

$chart = new Line();
$chart["data"] = [5, 20, 36, 10, 10, 20];
$option->series([$chart]);

$echarts->option($option);

$content = $echarts->render();
echo $content;
```

## 示例 - Bar
```
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
```



## Issues
如果有遇到问题请提交 [issues](https://github.com/youyiio/php-echarts/issues)


## License
Apache 2.0
