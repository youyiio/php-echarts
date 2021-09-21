<?php
/**
 * Created by php-echarts AutoGenerate.
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
 * @property string $coordinateSystem Default: 'geo'
 *    
 *
 * @property integer $xAxisIndex Default: 0
 *    
 *
 * @property integer $yAxisIndex Default: 0
 *    
 *
 * @property integer $geoIndex Default: 0
 *    
 *
 * @property boolean $polyline Default: false
 *    
 *
 * @property array $effect
 *    
 *
 * @property boolean $large Default: false
 *    
 *
 * @property integer $largeThreshold Default: 2000
 *    
 *
 * @property string|array $symbol Default: 'none'
 *    
 *
 * @property integer|array $symbolSize Default: 10
 *    
 *
 * @property array $lineStyle
 *    
 *
 * @property array $label
 *    
 *
 * @property array|callable $labelLayout
 *    
 *
 * @property array $emphasis
 *    
 *
 * @property lines\Blur $blur
 *    
 *
 * @property lines\Select $select
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
 * {_more_}
 */
class Lines extends Chart
{

    function __construct()
    {
        $this->type = 'lines';
    }
}