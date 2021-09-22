<?php
/**
 * Created by cattong.
 * User: aronter@gmail.com
 * Date: 2020/12/23
 * Time: 15:30
 */
namespace beyong\echarts;

use beyong\echarts\Chart;
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
 * ECharts Option class
 * 
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

    public function dataZooms(array $dataZoom)
    {
        $this->_options['dataZoom'] = $dataZoom;
        return $this;
    }

    public function addDataZoom($dataZoom)
    {
        $this->_options['dataZoom'][] = $dataZoom;
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

    public function grid($grid)
    {
        if (is_array($grid)) {
            $grid = new Grid($grid);
        }

        $this->_options['grid'] = $grid;
        return $this;
    }

    public function polar($polar)
    {
        if (is_array($polar)) {
            $polar = new Polar($polar);
        }

        $this->_options['polar'] = $polar;
        return $this;
    }

    public function radiusAxis($radiusAxis)
    {
        if (is_array($radiusAxis)) {
            $radiusAxis = new RadiusAxis($radiusAxis);
        }

        $this->_options['radiusAxis'] = $radiusAxis;
        return $this;
    }

    public function angleAxis($angleAxis)
    {
        if (is_array($angleAxis)) {
            $angleAxis = new AngleAxis($angleAxis);
        }

        $this->_options['angleAxis'] = $angleAxis;
        return $this;
    }

    public function radar($radar)
    {
        if (is_array($radar)) {
            $radar = new Radar($radar);
        }

        $this->_options['radar'] = $radar;
        return $this;
    }

    public function visualMaps(array $visualMaps)
    {
        $this->_options['visualMap'] = $visualMaps;
        return $this;
    }

    public function addVisualMap($visualMap)
    {
        $this->_options['visualMap'][] = $visualMap;
        return $this;
    }

    public function axisPointer($axisPointer)
    {
        if (is_array($axisPointer)) {
            $axisPointer = new AxisPointer($axisPointer);
        }

        $this->_options['axisPointer'] = $axisPointer;
        return $this;
    }

    public function brush($brush)
    {
        if (is_array($brush)) {
            $brush = new Brush($brush);
        }

        $this->_options['brush'] = $brush;
        return $this;
    }

    public function geo($geo)
    {
        if (is_array($geo)) {
            $geo = new Geo($geo);
        }

        $this->_options['geo'] = $geo;
        return $this;
    }

    public function parallel($parallel)
    {
        if (is_array($parallel)) {
            $parallel = new Parallel($parallel);
        }

        $this->_options['parallel'] = $parallel;
        return $this;
    }

    public function parallelAxis($parallelAxis)
    {
        if (is_array($parallelAxis)) {
            $parallelAxis = new ParallelAxis($parallelAxis);
        }

        $this->_options['parallelAxis'] = $parallelAxis;
        return $this;
    }

    public function singleAxis($singleAxis)
    {
        if (is_array($singleAxis)) {
            $singleAxis = new SingleAxis($singleAxis);
        }

        $this->_options['singleAxis'] = $singleAxis;
        return $this;
    }

    public function timeline($timeline)
    {
        if (is_array($timeline)) {
            $timeline = new Timeline($timeline);
        }

        $this->_options['timeline'] = $timeline;
        return $this;
    }

    public function graphic($graphic)
    {
        if (is_array($graphic)) {
            $graphic = new Graphic($graphic);
        }

        $this->_options['graphic'] = $graphic;
        return $this;
    }

    public function calendar($calendar)
    {
        if (is_array($calendar)) {
            $calendar = new Calendar($calendar);
        }

        $this->_options['calendar'] = $calendar;
        return $this;
    }

    public function dataset($dataset)
    {
        if (is_array($dataset)) {
            $dataset = new Dataset($dataset);
        }

        $this->_options['dataset'] = $dataset;
        return $this;
    }

    public function aria($aria)
    {
        if (is_array($aria)) {
            $aria = new Aria($aria);
        }

        $this->_options['aria'] = $aria;
        return $this;
    }

    public function textStyle($textStyle)
    {
        if (is_array($textStyle)) {
            $textStyle = new TextStyle($textStyle);
        }

        $this->_options['textStyle'] = $textStyle;
        return $this;
    }

    public function stateAnimation($stateAnimation)
    {
        if (is_array($stateAnimation)) {
            $stateAnimation = new StateAnimation($stateAnimation);
        }

        $this->_options['stateAnimation'] = $stateAnimation;
        return $this;
    }

    public function darkMode(bool $darkMode)    
    {
        $this->_options['darkMode'] = $darkMode;
        return $this;
    }

    public function color(array $color)    
    {
        $this->_options['color'] = $color;
        return $this;
    }

    public function backgroundColor(string $backgroundColor)    
    {
        $this->_options['backgroundColor'] = $backgroundColor;
        return $this;
    }

    public function animation(bool $animation)    
    {
        $this->_options['animation'] = $animation;
        return $this;
    }

    public function animationThreshold(int $animationThreshold)    
    {
        $this->_options['animationThreshold'] = $animationThreshold;
        return $this;
    }

    public function animationDuration(int $animationDuration)    
    {
        $this->_options['animationDuration'] = $animationDuration;
        return $this;
    }

    public function animationEasing(string $animationEasing)    
    {
        $this->_options['animationEasing'] = $animationEasing;
        return $this;
    }

    public function animationDelay(int $animationDelay)    
    {
        $this->_options['animationDelay'] = $animationDelay;
        return $this;
    }

    public function animationDurationUpdate(int $animationDurationUpdate)    
    {
        $this->_options['animationDurationUpdate'] = $animationDurationUpdate;
        return $this;
    }

    public function animationEasingUpdate(int $animationEasingUpdate)    
    {
        $this->_options['animationEasingUpdate'] = $animationEasingUpdate;
        return $this;
    }

    public function animationDelayUpdate(int $animationDelayUpdate)    
    {
        $this->_options['animationDelayUpdate'] = $animationDelayUpdate;
        return $this;
    }
}