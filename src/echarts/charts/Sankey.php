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
 * @property integer $zlevel Default: 0
 *    
 *
 * @property integer $z Default: 2
 *    
 *
 * @property string|integer $left Default: '5%'
 *    
 *
 * @property string|integer $top Default: '5%'
 *    
 *
 * @property string|integer $right Default: '20%'
 *    
 *
 * @property string|integer $bottom Default: '5%'
 *    
 *
 * @property string|integer $width
 *    
 *
 * @property string|integer $height
 *    
 *
 * @property integer $nodeWidth Default: 20
 *    
 *
 * @property integer $nodeGap Default: 8
 *    
 *
 * @property string $nodeAlign Default: 'justify'
 *    
 *
 * @property integer $layoutIterations Default: 32
 *    
 *
 * @property string $orient Default: 'horizontal'
 *    
 *
 * @property boolean $draggable Default: true
 *    
 *
 * @property array $levels
 *    
 *
 * @property array $label
 *    
 *
 * @property array|callable $labelLayout
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property array $lineStyle
 *    
 *
 * @property array $emphasis
 *    
 *
 * @property sankey\Blur $blur
 *    
 *
 * @property sankey\Select $select
 *    
 *
 * @property boolean|string $selectedMode Default: false
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
 * @property string $animationEasing Default: 'linear'
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
class Sankey extends Chart
{

    function __construct()
    {
        $this->type = 'sankey';
    }
}