<?php
/**
 * Created by cattong.
 * User: aronter@gmail.com
 * Date: 2020/12/23
 * Time: 15:30
 */
namespace beyong\echarts;

use beyong\echarts\Chart;
use beyong\echarts\render\Engine;
use beyong\echarts\render\HtmlEngine;
use beyong\echarts\options\Title;
use beyong\echarts\options\XAxis;
use beyong\echarts\options\YAxis;
use beyong\echarts\options\AngleAxis;
use beyong\echarts\options\Geo;
use beyong\echarts\options\Legend;
use beyong\echarts\options\Grid;
use beyong\echarts\options\Polar;
use beyong\echarts\options\RadiusAxis;
use beyong\echarts\options\Radar;
use beyong\echarts\options\Tooltip;
use beyong\echarts\options\AxisPointer;
use beyong\echarts\options\Toolbox;
use beyong\echarts\options\Brush;
use beyong\echarts\options\parallel;
use beyong\echarts\options\ParallelAxis;
use beyong\echarts\options\SingleAxis;
use beyong\echarts\options\Timeline;
use beyong\echarts\options\Calendar;
use beyong\echarts\options\Dataset;
use beyong\echarts\options\Aria;
use beyong\echarts\options\Graphic;
use beyong\echarts\options\TextStyle;
use beyong\echarts\options\StateAnimation;

/**
 * ECharts Class
 * ECharts 入口类
 *   实际对应ECharts.js 的echarts类
 *
 */
class ECharts //extends Property
{
    private $id; //html dom $id
    private $engine; // render engine;

    private $optionObj; //echarts option;

    public $_events = [];

    protected $echartsJsVar; //ECharts实例的js变量名

    /**
     * 私有构造函数
     */
    private function __construct($id)
    {
        $this->id = $id;
        $this->optionObj = new Option();        
    }

    //ECharts初始化入库，与ECharts.js一致
    public static function init($id)
    {
        $instance = new ECharts($id);
        $instance->use(new HtmlEngine());

        return $instance;
    }

    public function use(Engine $engine=null)
    {
        if (empty($engine)) {
            $engine = new HtmlEngine();
        }
        $this->engine = $engine;

        $this->setEchartsJsVar();
    }

    //渲染输出
    public function render($attribute = array(), $theme = null)
    {
        return $this->engine->render($this->id, $this->optionObj, $theme, $attribute, $this->_events);
    }

    public function addExtraScript($file, $dist = null)
    {
        !$dist && $dist = $this->dist;
        $this->engine->addExtraScript($file, $dist);
    }

    public function on($event, $callback)
    {
        $this->_events[$event] = $callback;
    }

    //指定ECharts实例的js变量名
    public function setEChartsJsVar($name = null)
    {
        if (!$name || !is_string($name)) {
            $this->engine->echartsJsVar = 'php_echarts_' . uniqid();
        } else{
            $this->engine->echartsJsVar = $name;
        }

        $this->echartsJsVar = $this->engine->echartsJsVar;
    }
 
    //获取ECharts实例的js变量名
    public function getEChartsJsVar()
    {
        return $this->echartsJsVar;
    }

    //============option及相关属性设置================================================

    public function option(Option $option)
    {
        $this->optionObj = $option;
    }

    public function series(array $charts)
    {
        $this->optionObj->series($charts);
    }

    public function addSeries(Chart $chart)
    {
        $this->optionObj->addSeries($chart);
    }

    public function title(Title $title)
    {
        $this->optionObj->title($title);
    }

    public function legend(Legend $legend)
    {
        $this->optionObj->legend($legend);
    }

    public function grid(Grid $grid)
    {
        $this->optionObj->grid($grid);
    }

    public function xAxis(XAxis $xAxis)
    {
        $this->optionObj->xAxis($xAxis);
    }

    public function yAxis(YAxis $yAxis)
    {
        $this->optionObj->yAxis($yAxis);
    }

    public function polar(Polar $polar)
    {
        $this->optionObj->polar($polar);
    }

    public function radiusAxis(RadiusAxis $radiusAxis)
    {
        $this->optionObj->radiusAxis($radiusAxis);
    }

    public function angleAxis(AngleAxis $angleAxis)
    {
        $this->optionObj->angleAxis($angleAxis);
    }

    public function radar(Radar $radar)
    {
        $this->optionObj->radar($radar);
    }

    public function dataZooms(array $dataZooms)
    {
        $this->optionObj->dataZooms($dataZooms);
    }

    public function addDataZoom($dataZoom)
    {
        $this->optionObj->addDataZoom($dataZoom);
    }

    public function visualMaps(array $visualMaps)
    {
        $this->optionObj->visualMaps($visualMaps);
    }

    public function addVisualMap($visualMap)
    {
        $this->optionObj->addVisualMap($visualMap);
    }

    public function tooltip(Tooltip $tooltip)
    {
        $this->optionObj->tooltip($tooltip);
    }

    public function axisPointer(AxisPointer $axisPointer)
    {
        $this->optionObj->axisPointer($axisPointer);
    }

    public function toolbox(Toolbox $toolbox)
    {
        $this->optionObj->toolbox($toolbox);
    }

    public function brush(Brush $brush)
    {
        $this->optionObj->brush($brush);
    }

    public function geo(Geo $geo)
    {
        $this->optionObj->geo($geo);
    }

    public function parallel(Parallel $parallel)
    {
        $this->optionObj->parallel($parallel);
    }

    public function parallelAxis(ParallelAxis $parallelAxis)
    {
        $this->optionObj->parallelAxis($parallelAxis);
    }

    public function singleAxis(SingleAxis $singleAxis)
    {
        $this->optionObj->singleAxis($singleAxis);
    }

    public function timeline(Timeline $timeline)
    {
        $this->optionObj->timeline($timeline);
    }

    public function graphic(Graphic $graphic)
    {
        $this->optionObj->graphic($graphic);
    }

    public function calendar(Calendar $calendar)
    {
        $this->optionObj->calendar($calendar);
    }

    public function dataset(Dataset $dataset)
    {
        $this->optionObj->dataset($dataset);
    }

    public function aria(Aria $aria)
    {
        $this->optionObj->aria($aria);
    }

    public function textStyle(TextStyle $textStyle)
    {
        $this->optionObj->textStyle($textStyle);
    }

    public function stateAnimation(StateAnimation $stateAnimation)
    {
        $this->optionObj->stateAnimation($stateAnimation);
    }

    //============================================================


}



