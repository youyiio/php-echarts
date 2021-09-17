<?php
/**
 * Created by cattong.
 * User: aronter@gmail.com
 * Date: 2020/12/23
 * Time: 15:30
 */
namespace beyong\echarts;

use beyong\echarts\options\Title;
use beyong\echarts\options\Toolbox;
use beyong\echarts\options\Tooltip;
use beyong\echarts\options\XAxis;
use beyong\echarts\options\YAxis;
use beyong\echarts\options\DataZoom;
use Hisune\EchartsPHP\Doc\IDE\Aria\Series;

/**
 * ECharts Option class
 * 
 */
class Option 
{
    private $_title;
    private $_tooltip;
    private $_toolbox;
    private $_xAxis;
    private $_yAxis;

    private $_option = array();

    function __construct()
    {
    }

    public function title($title)
    {
        if (is_array($title)) {
            $title = new Title();
        }

        $this->_option['title'] = $title;
        return $this;
    }

    public function tooltip($tooltip)
    {
        if (is_array($tooltip)) {
            $tooltip = new Tooltip($tooltip);
        }

        $this->_option['tooltip'] = $tooltip;
        return $this;
    }

    public function toolbox($toolbox)
    {
        if (is_array($toolbox)) {
            $toolbox = new Toolbox($toolbox);
        }

        $this->_option['toolbox'] = $toolbox;
        return $this;
    }

    public function xAxis($xAxis)
    {
        if (is_array($xAxis)) {
            $xAxis = new XAxis($xAxis);
        }

        $this->_option['xAxis'] = $xAxis;
        return $this;
    }

    public function yAxis($yAxis)
    {
        if (is_array($yAxis)) {
            $yAxis = new YAxis($yAxis);
        }

        $this->_option['yAxis'] = $yAxis;
        return $this;
    }

    public function dataZoom($dataZoom)
    {
        if (is_array($dataZoom)) {
            $dataZoom = new DataZoom($dataZoom);
        }

        $this->_option['dataZoom'] = $dataZoom;
        return $this;
    }

    public function series($series)
    {
        if (is_array($series)) {
            $series = new Series($series);
        }

        $this->_option['series'] = $series;
        return $this;
    }

    /**
     * 输出json格式的option
     *
     * @return string
     */
    public function toJson()
    {
        $jsonStr = json_encode($this->_option, JSON_FORCE_OBJECT);
        return $jsonStr;
    }
}