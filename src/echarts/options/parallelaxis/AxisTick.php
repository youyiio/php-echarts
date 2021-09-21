<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\parallelaxis;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: true
 *    
 *
 * @property boolean $alignWithLabel Default: false
 *    
 *
 * @property integer|callable $interval Default: 'auto'
 *    
 *
 * @property boolean $inside Default: false
 *    
 *
 * @property integer $length Default: 5
 *    
 *
 * @property array $lineStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class AxisTick extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}