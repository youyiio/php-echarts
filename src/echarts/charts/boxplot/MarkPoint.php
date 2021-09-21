<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\boxplot;

use beyong\echarts\Property;

/**
 * @property string|callable $symbol Default: 'pin'
 *    
 *
 * @property integer|array|callable $symbolSize Default: 50
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
 * @property boolean $silent Default: false
 *    
 *
 * @property array $label
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property markpoint\Emphasis $emphasis
 *    
 *
 * @property markpoint\Blur $blur
 *    
 *
 * @property array $data
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
 * 
 * 
 * {_more_}
 */
class MarkPoint extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}