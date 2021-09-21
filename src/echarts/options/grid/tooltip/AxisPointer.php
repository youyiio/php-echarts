<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\grid\tooltip;

use beyong\echarts\Property;

/**
 * @property string $type Default: 'line'
 *    
 *
 * @property string $axis Default: 'auto'
 *    
 *
 * @property boolean $snap
 *    
 *
 * @property integer $z
 *    
 *
 * @property axispointer\Label $label
 *    
 *
 * @property axispointer\LineStyle $lineStyle
 *    
 *
 * @property axispointer\ShadowStyle $shadowStyle
 *    
 *
 * @property axispointer\CrossStyle $crossStyle
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
 * @property integer|callable $animationDurationUpdate Default: 200
 *    
 *
 * @property string $animationEasingUpdate Default: 'exponentialOut'
 *    
 *
 * @property integer|callable $animationDelayUpdate Default: 0
 *    
 *
 * 
 * 
 * {_more_}
 */
class AxisPointer extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}