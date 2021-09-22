<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts;

use beyong\echarts\Chart;

/**
 * @property string $id
 *    
 *
 * @property string $name
 *    
 *
 * @property string $colorBy Default: 'series'
 *    
 *
 * @property string $coordinateSystem Default: 'cartesian2d'
 *    
 *
 * @property integer $xAxisIndex Default: 0
 *    
 *
 * @property integer $yAxisIndex Default: 0
 *    
 *
 * @property integer $polarIndex Default: 0
 *    
 *
 * @property integer $geoIndex Default: 0
 *    
 *
 * @property integer $calendarIndex Default: 0
 *    
 *
 * @property boolean $legendHoverLink Default: true
 *    
 *
 * @property string|callable $symbol Default: 'circle'
 *    
 *
 * @property integer|array|callable $symbolSize Default: 10
 *    
 *
 * @property integer|callable $symbolRotate
 *    
 *
 * @property boolean $symbolKeepAspect Default: false
 *    
 *
 * @property array $symbolOffset Default: '[0, 0]'
 *    
 *
 * @property boolean $large Default: false
 *    
 *
 * @property integer $largeThreshold Default: 2000
 *    
 *
 * @property string $cursor Default: 'pointer'
 *    
 *
 * @property array $label
 *    
 *
 * @property array $labelLine
 *    
 *
 * @property array|callable $labelLayout
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property array $emphasis
 *    
 *
 * @property scatter\Blur $blur
 *    
 *
 * @property scatter\Select $select
 *    
 *
 * @property boolean|string $selectedMode Default: false
 *    
 *
 * @property integer $progressive Default: 400
 *    
 *
 * @property integer $progressiveThreshold Default: 3000
 *    
 *
 * @property array $dimensions
 *    
 *
 * @property array $encode
 *    
 *
 * @property string $seriesLayoutBy Default: 'column'
 *    
 *
 * @property integer $datasetIndex Default: 0
 *    
 *
 * @property string $dataGroupId
 *    
 *
 * @property array $data
 *    
 *
 * @property array $markPoint
 *    
 *
 * @property array $markLine
 *    
 *
 * @property array $markArea
 *    
 *
 * @property boolean $clip Default: true
 *    
 *
 * @property integer $zlevel Default: 0
 *    
 *
 * @property integer $z Default: 2
 *    
 *
 * @property boolean $silent Default: false
 *    
 *
 * @property boolean $animation Default: true
 *    
 *
 * @property integer $animationThreshold Default: 2000
 *    
 *
 * @property integer|callable $animationDuration Default: 1000
 *    
 *
 * @property string $animationEasing Default: 'cubicOut'
 *    
 *
 * @property integer|callable $animationDelay Default: 0
 *    
 *
 * @property integer|callable $animationDurationUpdate Default: 300
 *    
 *
 * @property string $animationEasingUpdate Default: 'cubicInOut'
 *    
 *
 * @property integer|callable $animationDelayUpdate Default: 0
 *    
 *
 * @property array $universalTransition
 *    
 *
 * @property array $tooltip
 *    
 *
 * {_more_}
 */
class Scatter extends Chart
{

    function __construct()
    {
        $this->type = 'scatter';
    }
}