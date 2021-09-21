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
 * @property string $colorBy Default: 'data'
 *    
 *
 * @property integer $zlevel Default: 0
 *    
 *
 * @property integer $z Default: 2
 *    
 *
 * @property array $center Default: '[\'50%\', \'50%\']'
 *    
 *
 * @property integer|string $radius Default: '75%'
 *    
 *
 * @property boolean $legendHoverLink Default: true
 *    
 *
 * @property integer $startAngle Default: 225
 *    
 *
 * @property integer $endAngle Default: -45
 *    
 *
 * @property boolean $clockwise Default: true
 *    
 *
 * @property gauge\Data $data
 *    
 *
 * @property integer $min Default: 0
 *    
 *
 * @property integer $max Default: 100
 *    
 *
 * @property integer $splitNumber Default: 10
 *    
 *
 * @property array $axisLine
 *    
 *
 * @property array $progress
 *    
 *
 * @property array $splitLine
 *    
 *
 * @property array $axisTick
 *    
 *
 * @property array $axisLabel
 *    
 *
 * @property array $pointer
 *    
 *
 * @property array $anchor
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property array $emphasis
 *    
 *
 * @property array $title
 *    
 *
 * @property array $detail
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
 * @property array $tooltip
 *    
 *
 * {_more_}
 */
class Gauge extends Chart
{

    function __construct()
    {
        $this->type = 'gauge';
    }
}