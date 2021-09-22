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
 * @property string $coordinateSystem Default: 'cartesian2d'
 *    
 *
 * @property integer $xAxisIndex Default: 0
 *    
 *
 * @property integer $yAxisIndex Default: 0
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
 * @property boolean $hoverAnimation Default: true
 *    
 *
 * @property string $layout
 *    
 *
 * @property integer $barWidth
 *    
 *
 * @property integer|string $barMinWidth
 *    
 *
 * @property integer|string $barMaxWidth
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property array $emphasis
 *    
 *
 * @property candlestick\Blur $blur
 *    
 *
 * @property candlestick\Select $select
 *    
 *
 * @property boolean|string $selectedMode Default: false
 *    
 *
 * @property boolean $large Default: true
 *    
 *
 * @property integer $largeThreshold Default: 600
 *    
 *
 * @property integer $progressive Default: 3000
 *    
 *
 * @property integer $progressiveThreshold Default: 10000
 *    
 *
 * @property string $progressiveChunkMode Default: 'mod'
 *    
 *
 * @property array $dimensions
 *    
 *
 * @property array $encode
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
 * @property integer|callable $animationDuration Default: 300
 *    
 *
 * @property string $animationEasing Default: 'linear'
 *    
 *
 * @property integer|callable $animationDelay Default: 0
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
class Candlestick extends Chart
{

    function __construct()
    {
        $this->type = 'candlestick';
    }
}