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
 * @property array $boxWidth Default: '[7, 50]'
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property array $emphasis
 *    
 *
 * @property boxplot\Blur $blur
 *    
 *
 * @property boxplot\Select $select
 *    
 *
 * @property boolean|string $selectedMode Default: false
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
 * @property integer $zlevel Default: 0
 *    
 *
 * @property integer $z Default: 2
 *    
 *
 * @property boolean $silent Default: false
 *    
 *
 * @property integer|callable $animationDuration Default: 800
 *    
 *
 * @property string $animationEasing Default: 'elasticOut'
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
class Boxplot extends Chart
{

    function __construct()
    {
        $this->type = 'boxplot';
    }
}