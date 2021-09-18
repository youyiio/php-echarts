<?php
/**
 * Created by cattong.
 * User: aronter@gmail.com
 * Date: 2020/12/23
 * Time: 15:30
 */
namespace beyong\echarts;

use beyong\echarts\charts\Chart;
use beyong\echarts\options\Title;
use beyong\echarts\options\Toolbox;
use beyong\echarts\options\Tooltip;
use beyong\echarts\options\XAxis;
use beyong\echarts\options\YAxis;
use beyong\echarts\options\DataZoom;
use beyong\echarts\options\Legend;

/**
 * ECharts Option class
 * 
 */
class Option extends Property
{

    //public $_options = array();

    function __construct()
    {
    }

    public function title($title)
    {
        if (is_array($title)) {
            $title = new Title($title);
        }

        $this->_options['title'] = $title;
        return $this;
    }

    public function tooltip($tooltip)
    {
        if (is_array($tooltip)) {
            $tooltip = new Tooltip($tooltip);
        }

        $this->_options['tooltip'] = $tooltip;
        return $this;
    }

    public function legend($legend)
    {
        if (is_array($legend)) {
            $legend = new Legend($legend);
        }

        $this->_options['legend'] = $legend;
        return $this;
    }

    public function toolbox($toolbox)
    {
        if (is_array($toolbox)) {
            $toolbox = new Toolbox($toolbox);
        }

        $this->_options['toolbox'] = $toolbox;
        return $this;
    }

    public function xAxis($xAxis)
    {
        if (is_array($xAxis)) {
            $xAxis = new XAxis($xAxis);
        }

        $this->_options['xAxis'] = $xAxis;
        return $this;
    }

    public function yAxis($yAxis)
    {
        if (is_array($yAxis)) {
            $yAxis = new YAxis($yAxis);
        }

        $this->_options['yAxis'] = $yAxis;
        return $this;
    }

    public function dataZoom($dataZoom)
    {
        if (is_array($dataZoom)) {
            $dataZoom = new DataZoom($dataZoom);
        }

        $this->_options['dataZoom'] = $dataZoom;
        return $this;
    }

    public function series(array $charts)
    {
        $this->_options['series'] = $charts;
        return $this;
    }

    public function addSeries(Chart $series)
    {
        $this->_options['series'][] = $series;
        return $this;
    }

}