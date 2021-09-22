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
 * @property string $colorBy Default: 'data'
 *    
 *
 * @property integer $min Default: 0
 *    
 *
 * @property integer $max Default: 100
 *    
 *
 * @property integer|string $minSize Default: '0%'
 *    
 *
 * @property integer|string $maxSize Default: '100%'
 *    
 *
 * @property string $orient Default: 'vertical'
 *    
 *
 * @property string|callable $sort Default: 'descending'
 *    
 *
 * @property integer $gap Default: 0
 *    
 *
 * @property boolean $legendHoverLink Default: true
 *    
 *
 * @property string $funnelAlign Default: 'center'
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
 * @property funnel\Blur $blur
 *    
 *
 * @property funnel\Select $select
 *    
 *
 * @property boolean|string $selectedMode Default: false
 *    
 *
 * @property integer $zlevel Default: 0
 *    
 *
 * @property integer $z Default: 2
 *    
 *
 * @property string|integer $left Default: 80
 *    
 *
 * @property string|integer $top Default: 60
 *    
 *
 * @property string|integer $right Default: 80
 *    
 *
 * @property string|integer $bottom Default: 60
 *    
 *
 * @property string|integer $width Default: 'auto'
 *    
 *
 * @property string|integer $height Default: 'auto'
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
class Funnel extends Chart
{

    function __construct()
    {
        $this->type = 'funnel';
    }
}