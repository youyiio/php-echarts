<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\boxplot;

use beyong\echarts\Property;

/**
 * @property boolean $silent Default: false
 *    
 *
 * @property string|array $symbol
 *    
 *
 * @property integer|array $symbolSize
 *    
 *
 * @property integer $precision Default: 2
 *    
 *
 * @property array $label
 *    
 *
 * @property array $lineStyle
 *    
 *
 * @property markline\Emphasis $emphasis
 *    
 *
 * @property markline\Blur $blur
 *    
 *
 * @property markline\Data $data
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
class MarkLine extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}