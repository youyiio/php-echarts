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
 * @property string|integer $right Default: '5%'
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
 * @property string $coordinateSystem Default: '"single"'
 *    
 *
 * @property array $boundaryGap Default: '["10%", "10%"]'
 *    
 *
 * @property integer $singleAxisIndex Default: 0
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
 * @property themeriver\Blur $blur
 *    
 *
 * @property themeriver\Select $select
 *    
 *
 * @property boolean|string $selectedMode Default: false
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
class ThemeRiver extends Chart
{

    function __construct()
    {
        $this->type = 'themeriver';
    }
}