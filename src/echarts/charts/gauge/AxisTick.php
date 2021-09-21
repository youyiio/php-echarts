<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\gauge;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: true
 *    
 *
 * @property integer $splitNumber Default: 5
 *    
 *
 * @property integer|string $length Default: 6
 *    
 *
 * @property integer $distance Default: 10
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