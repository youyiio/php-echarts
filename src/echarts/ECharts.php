<?php
/**
 * Created by cattong.
 * User: aronter@gmail.com
 * Date: 2020/12/23
 * Time: 15:30
 */
namespace beyong\echarts;

use beyong\echarts\charts\Chart;
use beyong\echarts\render\Engine;
use beyong\echarts\render\HtmlEngine;
use beyong\echarts\options\XAxis;
use beyong\echarts\options\YAxis;

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
    protected $jsVar;

    /**
     * 私有构造函数
     */
    private function __construct($id, Engine $engine)
    {
        $this->id = $id;
        $this->optionObj = new Option(); 
        $this->engine = $engine;

        $this->setJsVar();
    }

    //ECharts初始化入库，与ECharts.js一致
    public static function init($id, Engine $engine=null)
    {
        if (empty($engine)) {
            $engine = new HtmlEngine();
        }

        $instance = new ECharts($id, $engine);

        return $instance;
    }

    //渲染输出
    public function render($attribute = array(), $theme = null)
    {
        return $this->engine->render($this->id, $this->optionObj, $theme, $attribute, $this->_events);
    }

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

    public function xAxis(XAxis $xAxis)
    {
        $this->optionObj->xAxis($xAxis);
    }

    public function yAxis(YAxis $yAxis)
    {
        $this->optionObj->yAxis($yAxis);
    }

    //============================================================

    public function on($event, $callback)
    {
        $this->_events[$event] = $callback;
    }

    public function setJsVar($name = null)
    {
        if (!$name || !is_string($name)) {
            $this->engine->jsVar = uniqid();
        } else{
            $this->engine->jsVar = $name;
        }

        $this->jsVar = $this->engine->jsVar;
    }

    public function getJsVar($full = false)
    {
        return $full ? 'php_echarts_' . $this->jsVar : $this->jsVar;
    }


}



