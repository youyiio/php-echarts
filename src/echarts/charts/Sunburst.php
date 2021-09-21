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
 * @property array $center Default: '[\'50%\', \'50%\']'
 *    
 *
 * @property integer|string|array $radius Default: '[0, \'75%\']'
 *    
 *
 * @property array $data
 *    
 *
 * @property array|callable $labelLayout
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
 * @property boolean|string $nodeClick Default: 'rootToNode'
 *    
 *
 * @property string|callable $sort Default: 'desc'
 *    
 *
 * @property boolean $renderLabelForZeroData Default: false
 *    
 *
 * @property * $emphasis
 *    
 *
 * @property sunburst\Blur $blur
 *    
 *
 * @property sunburst\Select $select
 *    
 *
 * @property boolean|string $selectedMode Default: false
 *    
 *
 * @property array $levels
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
 * @property integer|callable $animationDurationUpdate Default: 500
 *    
 *
 * @property string $animationEasingUpdate Default: 'cubicInOut'
 *    
 *
 * @property integer|callable $animationDelayUpdate Default: 0
 *    
 *
 * {_more_}
 */
class Sunburst extends Chart
{

    function __construct()
    {
        $this->type = 'sunburst';
    }
}