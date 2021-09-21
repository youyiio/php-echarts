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
 * @property boolean $legendHoverLink Default: true
 *    
 *
 * @property boolean|string $selectedMode Default: false
 *    
 *
 * @property integer $selectedOffset Default: 10
 *    
 *
 * @property boolean $clockwise Default: true
 *    
 *
 * @property integer $startAngle Default: 90
 *    
 *
 * @property integer $minAngle Default: 0
 *    
 *
 * @property integer $minShowLabelAngle Default: 0
 *    
 *
 * @property boolean|string $roseType Default: false
 *    
 *
 * @property boolean $avoidLabelOverlap Default: true
 *    
 *
 * @property boolean $stillShowZeroSum Default: true
 *    
 *
 * @property string $cursor Default: 'pointer'
 *    
 *
 * @property integer $zlevel Default: 0
 *    
 *
 * @property integer $z Default: 2
 *    
 *
 * @property string|integer $left Default: 0
 *    
 *
 * @property string|integer $top Default: 0
 *    
 *
 * @property string|integer $right Default: 0
 *    
 *
 * @property string|integer $bottom Default: 0
 *    
 *
 * @property string|integer $width Default: 'auto'
 *    
 *
 * @property string|integer $height Default: 'auto'
 *    
 *
 * @property boolean $showEmptyCircle Default: true
 *    
 *
 * @property array $emptyCircleStyle
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
 * @property pie\Blur $blur
 *    
 *
 * @property pie\Select $select
 *    
 *
 * @property array $center Default: '[\'50%\', \'50%\']'
 *    
 *
 * @property integer|string|array $radius Default: '[0, \'75%\']'
 *    
 *
 * @property string $seriesLayoutBy Default: 'column'
 *    
 *
 * @property integer $datasetIndex Default: 0
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
 * @property boolean $silent Default: false
 *    
 *
 * @property string $animationType Default: 'expansion'
 *    
 *
 * @property string $animationTypeUpdate Default: 'transition'
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
class Pie extends Chart
{

    function __construct()
    {
        $this->type = 'pie';
    }
}