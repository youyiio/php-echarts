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
 * @property string|integer $left Default: '12%'
 *    
 *
 * @property string|integer $top Default: '12%'
 *    
 *
 * @property string|integer $right Default: '12%'
 *    
 *
 * @property string|integer $bottom Default: '12%'
 *    
 *
 * @property string|integer $width
 *    
 *
 * @property string|integer $height
 *    
 *
 * @property string $layout Default: 'orthogonal'
 *    
 *
 * @property string $orient Default: 'LR'
 *    
 *
 * @property string|callable $symbol Default: 'emptyCircle'
 *    
 *
 * @property integer|array|callable $symbolSize Default: 7
 *    
 *
 * @property integer|callable $symbolRotate
 *    
 *
 * @property boolean $symbolKeepAspect Default: false
 *    
 *
 * @property array $symbolOffset Default: '[0, 0]'
 *    
 *
 * @property string $edgeShape Default: 'curve'
 *    
 *
 * @property string $edgeForkPosition Default: '50%'
 *    
 *
 * @property boolean|string $roam Default: false
 *    
 *
 * @property boolean $expandAndCollapse Default: true
 *    
 *
 * @property integer $initialTreeDepth Default: 2
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property array $label
 *    
 *
 * @property array|callable $labelLayout
 *    
 *
 * @property array $lineStyle
 *    
 *
 * @property array $emphasis
 *    
 *
 * @property tree\Blur $blur
 *    
 *
 * @property tree\Select $select
 *    
 *
 * @property boolean|string $selectedMode Default: false
 *    
 *
 * @property tree\Leaves $leaves
 *    
 *
 * @property array $data
 *    
 *
 * @property array $tooltip
 *    
 *
 * {_more_}
 */
class Tree extends Chart
{

    function __construct()
    {
        $this->type = 'tree';
    }
}