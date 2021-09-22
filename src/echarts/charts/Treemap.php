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
 * @property string|integer $width Default: '80%'
 *    
 *
 * @property string|integer $height Default: '80%'
 *    
 *
 * @property integer $squareRatio
 *    
 *
 * @property integer $leafDepth
 *    
 *
 * @property string $drillDownIcon Default: '▶'
 *    
 *
 * @property boolean|string $roam Default: true
 *    
 *
 * @property boolean|string $nodeClick Default: 'zoomToNode'
 *    
 *
 * @property integer $zoomToNodeRatio Default: '0.32*0.32'
 *    
 *
 * @property integer $visualDimension Default: 0
 *    
 *
 * @property integer $visualMin
 *    
 *
 * @property integer $visualMax
 *    
 *
 * @property array $colorAlpha
 *    
 *
 * @property integer $colorSaturation
 *    
 *
 * @property string $colorMappingBy Default: 'index'
 *    
 *
 * @property integer $visibleMin Default: 10
 *    
 *
 * @property integer $childrenVisibleMin
 *    
 *
 * @property array $label
 *    
 *
 * @property array $upperLabel
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property array $emphasis
 *    
 *
 * @property treemap\Blur $blur
 *    
 *
 * @property treemap\Select $select
 *    
 *
 * @property boolean|string $selectedMode Default: false
 *    
 *
 * @property array $breadcrumb
 *    
 *
 * @property array $labelLine
 *    
 *
 * @property array|callable $labelLayout
 *    
 *
 * @property array $levels
 *    
 *
 * @property array $data
 *    
 *
 * @property boolean $silent Default: false
 *    
 *
 * @property integer|callable $animationDuration Default: 1500
 *    
 *
 * @property string $animationEasing Default: 'quinticInOut'
 *    
 *
 * @property integer|callable $animationDelay Default: 0
 *    
 *
 * @property array $tooltip
 *    
 *
 * {_more_}
 */
class Treemap extends Chart
{

    function __construct()
    {
        $this->type = 'treemap';
    }
}