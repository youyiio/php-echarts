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
 * @property boolean $roundCap Default: false
 *    
 *
 * @property boolean $showBackground Default: false
 *    
 *
 * @property array $backgroundStyle
 *    
 *
 * @property array $label
 *    
 *
 * @property array $labelLine
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property array|callable $labelLayout
 *    
 *
 * @property array $emphasis
 *    
 *
 * @property bar\Blur $blur
 *    
 *
 * @property bar\Select $select
 *    
 *
 * @property boolean|string $selectedMode Default: false
 *    
 *
 * @property string $stack
 *    
 *
 * @property string $sampling
 *    
 *
 * @property string $cursor Default: 'pointer'
 *    
 *
 * @property integer|string $barWidth Default: '自适应'
 *    
 *
 * @property integer|string $barMaxWidth
 *    
 *
 * @property integer|string $barMinWidth
 *    
 *
 * @property integer $barMinHeight Default: 0
 *    
 *
 * @property integer $barMinAngle Default: 0
 *    
 *
 * @property string $barGap Default: '30%'
 *    
 *
 * @property string $barCategoryGap Default: '20%'
 *    
 *
 * @property boolean $large Default: false
 *    
 *
 * @property integer $largeThreshold Default: 400
 *    
 *
 * @property integer $progressive Default: 5000
 *    
 *
 * @property integer $progressiveThreshold Default: 3000
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
class Bar extends Chart
{

    function __construct()
    {
        $this->type = 'bar';
    }
}