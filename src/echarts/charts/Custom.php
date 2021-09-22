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
 * @property boolean $legendHoverLink Default: true
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
 * @property callable $renderItem
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property array $labelLine
 *    
 *
 * @property array|callable $labelLayout
 *    
 *
 * @property boolean|string $selectedMode Default: false
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
 * @property boolean $clip Default: false
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
class Custom extends Chart
{

    function __construct()
    {
        $this->type = 'custom';
    }
}