<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\tree;

use beyong\echarts\Property;

/**
 * @property string $name
 *    
 *
 * @property integer $value
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property array $lineStyle
 *    
 *
 * @property array $label
 *    
 *
 * @property data\Emphasis $emphasis
 *    
 *
 * @property data\Blur $blur
 *    
 *
 * @property data\Select $select
 *    
 *
 * @property * $tooltip
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
 * 
 * 
 * {_more_}
 */
class Data extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}