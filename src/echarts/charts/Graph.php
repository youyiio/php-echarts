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
 * @property boolean $legendHoverLink Default: true
 *    
 *
 * @property string $coordinateSystem
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
 * @property array $center
 *    
 *
 * @property integer $zoom Default: 1
 *    
 *
 * @property string $layout Default: 'none'
 *    
 *
 * @property array $circular
 *    
 *
 * @property array $force
 *    
 *
 * @property boolean|string $roam Default: false
 *    
 *
 * @property double $nodeScaleRatio Default: '0.6'
 *    
 *
 * @property boolean $draggable Default: false
 *    
 *
 * @property array|string $edgeSymbol Default: '[\'none\', \'none\']'
 *    
 *
 * @property array|integer $edgeSymbolSize Default: 10
 *    
 *
 * @property string $cursor Default: 'pointer'
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property array $lineStyle
 *    
 *
 * @property array $label
 *    
 *
 * @property array $edgeLabel
 *    
 *
 * @property array|callable $labelLayout
 *    
 *
 * @property array $emphasis
 *    
 *
 * @property graph\Blur $blur
 *    
 *
 * @property graph\Select $select
 *    
 *
 * @property boolean|string $selectedMode Default: false
 *    
 *
 * @property array $categories
 *    
 *
 * @property boolean|integer|array $autoCurveness Default: false
 *    
 *
 * @property array $data
 *    
 *
 * @property array $nodes
 *    
 *
 * @property array $links
 *    
 *
 * @property array $edges
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
 * @property integer $zlevel Default: 0
 *    
 *
 * @property integer $z Default: 2
 *    
 *
 * @property string|integer $left Default: 'center'
 *    
 *
 * @property string|integer $top Default: 'middle'
 *    
 *
 * @property string|integer $right Default: 'auto'
 *    
 *
 * @property string|integer $bottom Default: 'auto'
 *    
 *
 * @property string|integer $width Default: '自适应'
 *    
 *
 * @property string|integer $height Default: '自适应'
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
class Graph extends Chart
{

    function __construct()
    {
        $this->type = 'graph';
    }
}